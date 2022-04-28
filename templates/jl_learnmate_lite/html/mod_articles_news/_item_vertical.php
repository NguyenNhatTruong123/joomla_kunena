<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

?>
<div class="el-item jl-card jl-card-default jl-card-hover jl-link-toggle jl-display-block">

<div class="jl-card-media-top">
	<?php if ($params->get('img_intro_full') !== 'none' && !empty($item->imageSrc)) : ?>
		<a href="<?php echo $item->link; ?>">
			<?php echo LayoutHelper::render(
				'joomla.html.image',
				[
					'src' => $item->imageSrc,
					'alt' => $item->imageAlt,
				]
			); ?>
		</a>
	<?php endif; ?>
</div>

<div class="jl-card-body jl-margin-remove-first-child">

	<?php if ($params->get('item_title')) : ?>
		<?php $item_heading = $params->get('item_heading', 'h3'); ?>
		<<?php echo $item_heading; ?> class="el-title jl-h5 jl-margin-remove-bottom">
			<?php if ($item->link !== '' && $params->get('link_titles')) : ?>
				<a class="jl-link-heading" href="<?php echo $item->link; ?>">
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
		<div class="el-content jl-panel jl-margin-top">
			<?php echo substr(strip_tags($item->introtext), 0, 100) . '...'; ?>
		</div>
	<?php endif; ?>

	<?php echo $item->afterDisplayContent; ?>

	<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
		<?php echo '<p class="jl-margin-top"><a class="jl-button jl-button-primary" href="' . $item->link . '">' .Text::_('JGLOBAL_READ_MORE'). '</a></p>'; ?>
	<?php endif; ?>

	</div>
	
</div>