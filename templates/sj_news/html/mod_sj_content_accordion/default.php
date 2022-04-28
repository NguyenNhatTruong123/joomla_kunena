<?php
/**
 * @package Sj Content Accordion
 * @version 3.1.1
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @copyright (c) 2013 YouTech Company. All Rights Reserved.
 * @author YouTech Company http://www.smartaddons.com
 *
 */
 
defined('_JEXEC') or die;

$tag_id = 'sj_accordion_'.time().rand();
JHtml::stylesheet('modules/'.$module->module.'/assets/css/accordion.css');
	if($params->get('include_js') == '1') {
		JHtml::script('modules/' . $module->module . '/assets/js/jquery.min.js');
	}
JHtml::script('modules/'.$module->module.'/assets/js/jquery.jaccordion.js');
AccordionImageHelper::setDefault($params);
$tab_active = (int)$params->get('tab_active');
if($tab_active <=0 || $tab_active > count($list)){
	$tab_active = 0;
}?>
<?php if($params->get('pretext') != null){?>
<div class="acd-pretext">
	<?php echo $params->get('pretext'); ?>
</div>
<?php }
if(!empty($list)){?>
	<div id="<?php echo $tag_id; ?>" class="sj-accordion">
		<div class="acd-items">
			<?php  foreach($list as $item){
			?>
			<div class="acd-item">
				<div class="acd-header">
					<?php echo AccordionHelper::truncate($item->title, $params->get('item_title_max_characs'))?>
				</div>
				<div class="acd-content-wrap cf">
					<div class="acd-content-wrap-inner cf">
						<?php $img = AccordionHelper::getAImage($item, $params);
						if($img){
						?>
						<div class="acd-image cf">
							<a href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>" <?php echo AccordionHelper::parseTarget($params->get('item_link_target')); ?> >
				    			<?php echo AccordionHelper::imageTag($img); ?>
							</a>
						</div>
						<?php } ?>
						<?php if($params->get('item_desc_display') == 1 || $params->get('item_readmore_display') == 1) {?>
						<div class="acd-content">
							<?php 
							if($params->get('item_desc_display') == 1 && AccordionHelper::_trimEncode($item->introtext) != '') {?>
							<div class="acd-description">
								<?php //echo $item->introtext; ?>
								<?php echo AccordionHelper::truncate(strip_tags($item->introtext), $params->get('item_desc_max_characs',200)); ?>
							</div>
							<?php }
							$tags = '';
							if($params->get('item_tags_display') == 1 && $item->tags != '' && !empty($item->tags->itemTags) ) {	
								$item->tagLayout = new JLayoutFile('joomla.content.tags');
								$tags = $item->tagLayout->render($item->tags->itemTags); 
							}
							if($tags != ''){ ?>
								<div class="acd-tags">
									<?php echo  $tags; ?>
								</div>
							<?php } ?>
							<?php if($params->get('item_readmore_display') == 1) {?>
							<div class="accd-readmore">
								<a href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>" <?php echo AccordionHelper::parseTarget($params->get('item_link_target')); ?> >
									<?php echo $params->get('item_readmore_text'); ?>
								</a>
							</div>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
<?php }else{
	echo '<div class="no-item">'.JText::_('Has no content to show!').'</div>';
}?>
<?php if($params->get('posttext') != null){?>
<div class="acd-posttext">
	<?php echo $params->get('posttext'); ?>
</div>
<?php }?>
<script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function($) {
		;(function(element){
			var $element = $(element);
			$element.jaccordion({
				items : '.acd-item',
				heading : '.acd-header',
				content : '.acd-content-wrap',
				active_class : 'selected',
				event : '<?php echo $params->get('pager_event','click');?>',
				delay : 200,
				duration : 400,
				active : <?php echo $tab_active; ?>
			}); 
		
		})('#<?php echo $tag_id; ?>');
	}); 
//]]>	
</script>	

