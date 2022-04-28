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
$img = NewsAjaxtabsHelper::getAImage($item, $params);
?>
<div class="item-wrap ajaxtabs-item">
	<div class="item-wrap-inner">
	<?php 

	if( $img ):?>
		<div class="item-image">
			<a href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>" <?php echo NewsAjaxtabsHelper::parseTarget($params->get('item_link_target','_blank')); ?>>
			<?php echo NewsAjaxtabsHelper::imageTag($img);?>
			</a>
		</div>
	<?php endif; // image display ?>
	
	<?php if( (int)$params->get('item_title_display', 1) ): ?>
		<div class="item-title">
			<a href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>" <?php echo NewsAjaxtabsHelper::parseTarget($params->get('item_link_target','_blank')); ?>>
				<?php
				$item_title_max_characs = ((int)$params->get('item_title_max_characs') > 0) ? (int)$params->get('item_title_max_characs') : 20;
				echo NewsAjaxtabsHelper::truncate($item->title, $item_title_max_characs);
				?>
			</a>
		</div>
	<?php endif; // title display ?>
	
	<?php if( (int)$params->get('item_desc_display', 1) ): ?>
		<div class="item-description">
			<?php //echo $item->introtext;?>
			<?php echo NewsAjaxtabsHelper::truncate(strip_tags($item->introtext), $params->get('item_desc_max_characs',200)); ?>
		</div>
	<?php endif; // description display ?>
	<?php
	$tags = '';
	if($params->get('item_tags_display') == 1 && $item->tags != '' && !empty($item->tags->itemTags) ) {	
		$item->tagLayout = new JLayoutFile('joomla.content.tags');
		$tags = $item->tagLayout->render($item->tags->itemTags); 
	}	
	if($tags != ''){?>
	<div class="item-tags">
		<?php echo  $tags; ?>
	</div>
	<?php }	?>
	<?php if( (int)$params->get('item_readmore_display', 1) ): ?>
		<div class="item-readmore">
			<a href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>" <?php echo NewsAjaxtabsHelper::parseTarget($params->get('item_link_target','_blank')); ?>>
				<?php echo $params->get('item_readmore_text', 'readmore'); ?>
			</a>		
		</div>
	<?php endif; // readmore display ?>
	</div>
</div>

