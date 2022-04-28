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
<?php
 $item0 = array_shift($_items);
 $other_items = $_items;
 ?>
<div class="item-first item-wrap">
	<?php $img = MegaNewsHelper::getAImage( $item0, $params);
	if($img) { ?>
	<div class="item-image">
		<a href="<?php echo $item0->link; ?>" title="<?php echo $item0->title ?>" <?php echo MegaNewsHelper::parseTarget($params->get('link_target'));  ?>  >
			<?php  echo MegaNewsHelper::imageTag($img);	?>	
		</a>
	</div>
	<?php } ?>
	<?php if($params->get('item_title_display') == 1) { ?>
	<div class="item-title">
		<a href="<?php echo $item0->link; ?>" title="<?php echo $item0->title ?>" <?php echo MegaNewsHelper::parseTarget($params->get('link_target'));  ?>  >
			<?php  //echo $item0->title; ?>
			<?php echo MegaNewsBaseHelper::truncate(strip_tags($item0->title), $params->get('item_title_max_characs',200)); ?>
		</a>
	</div>
	<?php } ?>
	<?php if((int)$params->get('item_desc_display',1) && MegaNewsHelper::_trimEncode($item0->introtext) !=''){?>
	<p class="item-description item-desc">
		<?php  //echo $item0->introtext;?>
		<?php echo MegaNewsBaseHelper::truncate(strip_tags($item0->introtext), $params->get('item_desc_max_characs',200)); ?>
	</p>
	<?php }
	$tags = '';
	if($params->get('item_tags_display') == 1 && $item0->tags != '' && !empty($item0->tags->itemTags) ) {	
		$item0->tagLayout = new JLayoutFile('joomla.content.tags');
		$tags = $item0->tagLayout->render($item0->tags->itemTags); 
	}	
	if($tags != ''){?>
	<div class="item-tags">
		<?php echo  $tags; ?>
	</div>
	<?php }
	if((int)$params->get('item_readmore_display',1)) {?>
	<div class="item-readmore">
		<a href="<?php echo $item0->link; ?>" title="<?php echo $item0->title ?>" <?php echo MegaNewsHelper::parseTarget($params->get('link_target'));  ?>  >
			<?php  echo JText::_($params->get('item_readmore_text','Read more'));	?>	
		</a>
	</div>
	<?php } ?>
</div>
<?php if(!empty($other_items)) { ?>
<div class="item-other title-link-wrap">
	<!--div class="other-label"><?php echo JText::_('MORE_LABEL'); ?></div-->
	<ul class="other-links">
		<?php foreach( $other_items as $item) { ?>
		<li>
			<a href="<?php echo $item->link; ?>" title="<?php echo $item->title ?>" <?php echo MegaNewsHelper::parseTarget($params->get('link_target'));  ?>  >
				<?php  echo $item->title;	?>
			</a>
		</li>
		<?php } ?>
	</ul>
</div>
<?php }
if((int)$params->get('item_viewall_display',1)) { ?>
<div class="magenew-viewall">
	<a href="<?php echo $items->link; ?>" title="<?php echo $items->title; ?>" <?php echo MegaNewsHelper::parseTarget($params->get('link_target'));  ?> >
		<?php echo $params->get('item_viewall_text','View').' '.$items->title; ?>
	</a>
</div>	
<?php } ?>