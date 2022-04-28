<?php
/**
 * @package Sj News Scrollbar
 * @version 2.5
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @copyright (c) 2013 YouTech Company. All Rights Reserved.
 * @author YouTech Company http://www.smartaddons.com
 *
 */
defined('_JEXEC') or die;
$tag_id = 'sj-scrollbar'.rand().time();

ob_start();

$css = ob_get_contents();
?>
	#<?php echo $tag_id ?> .scrb-items .scrb-item{
		width:<?php echo $params->get('item_weight',230); ?>px;
	}
	
<?php 
$css = ob_get_contents();
ob_end_clean();
$document = JFactory::getDocument();
$document->addStyleDeclaration($css);
$num_items = count($list);
$num_rows  = (int)$params->get('num_rows', 1);
if ($num_rows < 1){
	$num_rows = 1;
}
$item_on_line = $num_rows<=1 ? $num_items : ceil((1.0/$num_rows)*$num_items);

NewsScrollbarImageHelper::setDefault($params);
?>

 <div id="<?php echo $tag_id; ?>" class="scrollbar-wrap ">
	<div  class="scrb-items cf ">
		<?php $i=0;$j=0; foreach($list as $item) { $j++;$i++;
			if ($item_on_line == 1 || $i % $item_on_line == 1){
				// open line
				
				$line_class = 'scrb-line';
				if ($i==$num_rows){
					$line_class .= ' last-line';
				}
				echo '<div class="' . $line_class . '">';
				
			}
			$is_last_item = ($i%$item_on_line==0) || ($i==$num_items);
		?>
		<div class="scrb-item">
			<div class="scrb-item-inner">
				<div class="scrb-image">
					<?php
					$img = NewsScrollbarHelper::getAImage($item, $params); 
					if($img){
					?>
					<a href="<?php echo $item->link ?>" <?php echo NewsScrollbarHelper::parseTarget($params->get('link_target','_self'))?> title="<?php echo $item->title?>" >
						<?php echo NewsScrollbarHelper::imageTag($img); ?>
					</a>
					<?php } ?>
				</div>
				<div class="scrb-title">
					<a href="<?php echo $item->link ?>" <?php echo NewsScrollbarHelper::parseTarget($params->get('link_target','_self'))?> title="<?php echo $item->title?>" >
						<?php echo NewsScrollbarHelper::truncate($item->title, $params->get('item_title_max_characs', 20)); ?>
					</a>
				</div>
				<div class="scrb-desc">
					<?php //echo $item->introtext; ?>
					<?php echo NewsScrollbarHelper::truncate($item->introtext, $params->get('introtext_limit', 50)); ?>
				</div>
				<div class="scrb-readmore">
					<a href="<?php echo $item->link ?>" <?php echo NewsScrollbarHelper::parseTarget($params->get('link_target','_self'))?> title="<?php echo $item->title?>" >
						<?php echo JText::_($params->get('item_readmore_text','readmore')); ?>
					</a>
				</div>
			</div>
		</div>
		<?php
			if ($is_last_item){
				echo '</div>';
			}?>  
		<?php } ?>
	</div>
 </div>
 
<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function($) {
	;(function(element){
		var $element = $(element);
		//(function($){
		//	$(window).load(function(){
				$(".scrb-items",$element).mCustomScrollbar({
					scrollInertia:550,
					horizontalScroll:true,
					mouseWheelPixels:116,
					autoDraggerLength:true,
					scrollButtons:{
						enable:<?php echo $show_arrows ?>,
						scrollAmount:116
					},
					 advanced:{
						updateOnContentResize: true
					},theme:"dark"
				});
		//	});
		//})(jQuery);
	})('#<?php echo $tag_id; ?>');
});	
//]]>	
</script>