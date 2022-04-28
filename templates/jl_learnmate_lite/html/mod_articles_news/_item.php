<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   (C) 2010 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Uri\Uri;

?>
<div class="el-item jl-panel jl-margin-remove-first-child">

<div class="jl-child-width-expand jl-grid-small" jl-grid>

  <?php if ($params->get('img_intro_full') !== 'none' && !empty($item->imageSrc)) : ?>
	<div class="jl-width-1-4">
		<div property="image" typeof="ImageObject">
			<meta property="url" content="<?= Uri::base() . $item->imageSrc ?>">
			<?php echo LayoutHelper::render(
				'joomla.html.image',
				[
					'src' => $item->imageSrc,
					'alt' => $item->imageAlt,
				]
			); ?>
		</div>		
	  </div>
  <?php endif; ?>

	<div class="jl-margin-remove-first-child">

	<?php if ($params->get('item_title')) : ?>

		<?php $item_heading = $params->get('item_heading', 'h4'); ?>
		<<?php echo $item_heading; ?> class="el-title jl-h5 jl-text-normal jl-margin-remove-bottom">
		<?php if ($item->link !== '' && $params->get('link_titles')) : ?>
			<a class="jl-link-text" href="<?php echo $item->link; ?>">
				<?php echo $item->title; ?>
			</a>
		<?php else : ?>
			<?php echo $item->title; ?>
		<?php endif; ?>
		</<?php echo $item_heading; ?>>
	<?php endif; ?>

	<?php if (!$params->get('intro_only')) : ?>
		<?php echo $item->afterDisplayTitle; ?>
	<?php endif; ?>

	<?php echo $item->beforeDisplayContent; ?>

	<?php if ($params->get('show_introtext', 1)) : ?>
		<?php echo $item->introtext; ?>
	<?php endif; ?>

	<?php echo $item->afterDisplayContent; ?>

	<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
		<?php echo LayoutHelper::render('joomla.content.readmore', array('item' => $item, 'params' => $item->params, 'link' => $item->link)); ?>
	<?php endif; ?>

	</div>
</div>
</div>
