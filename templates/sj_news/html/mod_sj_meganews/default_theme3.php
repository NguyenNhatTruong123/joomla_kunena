<?php
/**
 * @package Sj Mega News 
 * @version 3.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @copyright (c) 2013 YouTech Company. All Rights Reserved.
 * @author YouTech Company http://www.smartaddons.com
 *
 */
defined('_JEXEC') or die;
?>	
<?php $rest = 0;
foreach($_items as $item) { $rest ++; ?>
	<div class="meagnew-item">
		<div class="meganew-item-inner">
			<?php if($params->get('item_title_display') == 1) { ?>
			<div class="item-title">
				<a href="<?php echo $item->link; ?>" title="<?php echo $item->title ?>" <?php echo MegaNewsHelper::parseTarget($params->get('link_target'));  ?>  >
					<?php  echo $item->title; ?>
					<?php echo MegaNewsBaseHelper::truncate(strip_tags($item->title), $params->get('item_title_max_characs',200)); ?>
				</a>
			</div>
			<?php } $img = MegaNewsHelper::getAImage( $item, $params);
			if($img) { ?>
			<div class="item-image">
				<a href="<?php echo $item->link; ?>" title="<?php echo $item->title ?>" <?php echo MegaNewsHelper::parseTarget($params->get('link_target'));  ?>  >
					<?php  echo MegaNewsHelper::imageTag($img);	?>	
				</a>
			</div>
			<?php } 
			if((int)$params->get('item_desc_display',1) && MegaNewsHelper::_trimEncode($item->introtext) !=''){?>
			<div class="item-description">
					<?php  //echo $item->introtext;?>	
					<?php echo MegaNewsBaseHelper::truncate(strip_tags($item->introtext), $params->get('item_desc_max_characs',200)); ?>
			</div>
			<?php }
			$tags = '';
			if($params->get('item_tags_display') == 1 && $item->tags != '' && !empty($item->tags->itemTags) ) {	
				$item->tagLayout = new JLayoutFile('joomla.content.tags');
				$tags = $item->tagLayout->render($item->tags->itemTags); 
			}	
			if($tags != ''){?>
			<div class="item-tags">
				<?php echo  $tags; ?>
			</div>
			<?php }
			if((int)$params->get('item_readmore_display',1)) {?>
			<div class="item-readmore">
				<a href="<?php echo $item->link; ?>" title="<?php echo $item->title ?>" <?php echo MegaNewsHelper::parseTarget($params->get('link_target'));  ?>  >
					<?php  echo JText::_($params->get('item_readmore_text','Read more'));	?>	
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
	<?php 
	$cleart = 'clrt1';
	if ($rest % 2 == 0) $cleart .= ' clrt2';
	if ($rest % 3 == 0) $cleart .= ' clrt3';
	if ($rest % 4 == 0) $cleart .= ' clrt4';
	if ($rest % 5 == 0) $cleart .= ' clrt5';
	if ($rest % 6 == 0) $cleart .= ' clrt6';
	?>
	<div class="<?php echo $cleart; ?>"></div>   
<?php } ?>
<?php
if((int)$params->get('item_viewall_display',1)) { ?>
<div class="magenew-viewall">
	<a href="<?php echo $items->link; ?>" title="<?php echo $items->title; ?>" <?php echo MegaNewsHelper::parseTarget($params->get('link_target'));  ?> >
		<?php echo $params->get('item_viewall_text','View').' '.$items->title; ?>
	</a>
</div>	
<?php } ?>