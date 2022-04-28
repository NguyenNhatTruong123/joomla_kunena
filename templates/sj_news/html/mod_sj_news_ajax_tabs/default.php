<?php
/**
 * @package Sj News Ajax Tabs
 * @version 3.1.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @copyright (c) 2012 YouTech Company. All Rights Reserved.
 * @author YouTech Company http://www.smartaddons.com
 *
 */

defined('_JEXEC') or die;

JHtml::stylesheet('modules/'.$module->module.'/assets/css/ajax-tabs.css');
JHtml::stylesheet('modules/'.$module->module.'/assets/css/animate.css');
JHtml::stylesheet('modules/'.$module->module.'/assets/css/ajax-tabs-color.css');
if (!defined ('OWL_CAROUSEL'))
{
	JHtml::stylesheet('modules/' . $module->module . '/assets/css/owl.carousel.css');
	JHtml::script('modules/' . $module->module . '/assets/js/owl.carousel.js');
	define( 'OWL_CAROUSEL', 1 );
}
JHtml::script('modules/'.$module->module.'/assets/js/jquery.tabsmart.js');

$uniqueid = 'ajaxtabs_'.rand().time();

$cls_module = 'ajax-tabs-'.rand().time();

$options = $params->toObject();
$css_posiotion = $params->get('position', 'top') . '-position';
$moduleclass_sfx = $params->get('moduleclass_sfx');

/*--------------------------------*/

// check category loaded.
if( $list != null ){
	foreach ($list as $first_category){
		$category_preload = $first_category->id;
		break;
	}
	
	if( (int)$params->get('category_preload') && isset($list[ (int)$params->get('category_preload') ])) {
		$category_preload = (int)$params->get('category_preload');
	}
	// get $tabs_markup
	include JModuleHelper::getLayoutPath($module->module, $layout.'_tabs');
	
	if ($params->get('pretext', '')!=''): ?>
	<div class="pre-text"><?php echo $params->get('pretext'); ?></div>
	<?php
	endif; ?>
	<!--[if lt IE 9]><div class="sj-ajax-tabs <?php echo $css_posiotion .' '. $cls_module .' '. $moduleclass_sfx;?> msie lt-ie9" id="<?php echo $uniqueid; ?>" ><![endif]-->
	<!--[if IE 9]><div class="sj-ajax-tabs <?php echo $css_posiotion .' '. $cls_module .' '. $moduleclass_sfx;?> msie" id="<?php echo $uniqueid; ?>" ><![endif]-->
	<!--[if gt IE 9]><!--><div class="sj-ajax-tabs <?php echo $css_posiotion .' '. $cls_module .' '. $moduleclass_sfx;?>" id="<?php echo $uniqueid; ?>" ><!--<![endif]-->
	<?php
		// show tabs here if (top, left);
		if (in_array($params->get('position', 'top'), array('top', 'left'))){
			echo $tabs_markup;
		}?>
		<div class="tabs-content" <?php //echo $tabs_content_style; ?>>
			<div class="tabs-content-inner">
			<?php
			foreach($list as $category):
				// test category is preload
				$is_preload = $category->id == $category_preload;
				$css_selected = $is_preload ? "tab-content  category-id-{$category->id} selected" : "tab-content category-id-{$category->id}"; ?>
				<?php //var_dump($css_selected); die("ancnc");?>
				<div class="<?php echo $css_selected; ?>">
				<?php
					if ($is_preload){
						$category_items = & $category->child;
						include JModuleHelper::getLayoutPath($module->module, $layout.'_items');
					} else { ?>
						<div class="clear"></div>
						<div class="ajax-loader"></div>
				<?php
					} ?>
					<div class="clear"></div>
				</div>
			<?php
			endforeach; ?>
			<div class="clear"></div>
			</div>
		</div>
	<?php
		// show tabs here if (right, bottom);
		if (in_array($params->get('position', 'top'), array('right', 'bottom'))){
			echo $tabs_markup;
		}
	?>
	
	</div>
	<?php
	if ($params->get('posttext', '')!=''): ?>
	<div class="post-text"><?php echo $params->get('posttext'); ?></div>
	<?php
	endif; ?>
	<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready(function($){
			;(function(container){
				var $container = $(container);
				var $tabc_active = $('.tab-content',$container).filter('.selected');
				var slide_first = $('.items-container',$tabc_active).attr('id');
				_slideElement(slide_first);
				$container.tabsmart({
					sj_module: '<?php echo $module->module; ?>',
					sj_module_id: '<?php echo $module->id; ?>',
					ajax_url : '<?php echo (string)JURI::getInstance(); ?>',
					ajaxUpdate: function(element, options){
						var loaded = $(element).hasClass('loaded');
						if ( !loaded ){
							var loading = $('.ajax-loader', element);
							// show ajax indicator
							loading = loading.first();
							var loading_top = ($(element).parent().height() - loading.height())/2;
							var loading_left = ($(element).parent().width() - loading.width())/2;
							loading.css('padding', loading_top + 'px 0 0 ' + loading_left + 'px');

							var category_id = $(element).attr('class');
							category_id = category_id.replace('selected', '');
							category_id = category_id.replace('tab-content', '');
							category_id = category_id.replace('category-id-', '');
							category_id = $.trim(category_id);


							ajax_options = {
								sj_category_id:	category_id,
								sj_module_id:	options.sj_module_id,
								sj_module:		options.sj_module,
								sj_module_ajax_request: 1,
								sj_class_module: '<?php echo $cls_module;?>',
							};
							$.ajax({
								type: 'POST',
								url : options.ajax_url,
								data: ajax_options,
								success: function(data, textStatus, jqXHR){
									$(element).html(data).attr('title', null);
									$(element).addClass('loaded');
									var idslide = $('.items-container',$(element)).attr('id');								
									_slideElement(idslide);
								}
							});
						}
					},
					mouseEnable: false,
					touchEnable: false
				});

				function _slideElement(elements) {
					var $elements  = $('#'+elements);
					$elements.each(function(){
						var $this = $(this), options = options = !$this.data('modal') && $.extend({}, $this.data());
						$this.bind('jslide', function(e){
							var index = $(this).find(e.relatedTarget).index();
							// process for nav
							$('[data-jslide]').each(function(){
								var $nav = $(this), $navData = $nav.data(), href, $target = $($nav.attr('data-target') || (href = $nav.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, ''));
								if ( !$target.is($this) ) return;
								if (typeof $navData.jslide == 'number' && $navData.jslide==index){
									$nav.addClass('sel');
								} else {
									$nav.removeClass('sel');
								}
							});

						});

					});
					return ;
				}
			})('#<?php echo $uniqueid; ?>')
		});
		//]]>
	</script>
<?php } else { echo JText::_('Has no content to show!'); }?>