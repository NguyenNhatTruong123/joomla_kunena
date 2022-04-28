<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

if (!$list)
{
	return;
}

?> 
<?php
 $trending =  htmlspecialchars($params->get('moduleclass_sfx'), ENT_QUOTES, 'UTF-8');
 ?>
<ul class="mod-articleslatest latestnews mod-list <?php echo $trending; ?>">
<?php $i=1; ?>
<?php foreach ($list as $item) : ?>
	<li itemscope itemtype="https://schema.org/Article" <?php if($i==1){ echo "class='first'";}else if($i==count($list)){echo "class='last'";} ?>>
		<?php if($trending !=''){?><span class="google-font"><?php echo $i;?></span><?php } ?>
		<?php if($trending !=''){?>
			<a class="font_size<?php echo $i;?>" href="<?php echo $item->link; ?>" itemprop="url">
				<span itemprop="name">
					<?php echo $item->title; ?>
				</span>
			</a>
		<?php } else{ ?>
			<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
		<?php } ?>
	</li>
<?php $i ++; ?>
<?php endforeach; ?>
</ul>
<?php if($trending==''){?>
	<a href="#" class="more-news"><?php echo JText::_('MORE_NEWS');?><i class="icon-caret-right"></i></a>
<?php } ?>

<?php if($trending !=''){?>
	 <a href="#" class="see-all"><?php echo JText::_('SEE_ALL_TRENDS');?><i class="icon-caret-right"></i></a>
<?php } ?>
