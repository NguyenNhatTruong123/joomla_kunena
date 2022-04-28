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

<?php if ($params->get('item_title')) : ?>
		
	<?php if ($item->link !== '' && $params->get('link_titles')) : ?>
		<a class="jl-accordion-title" href="#">
			<?php echo $item->title; ?>
		</a>
	<?php else : ?>
		<a class="jl-accordion-title" href="#">
			<?php echo $item->title; ?>
		</a>
	<?php endif; ?>
		
<?php endif; ?>
    
<div class="jl-accordion-content">

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

	<?php if (!$params->get('intro_only')) : ?>
		<?php echo $item->afterDisplayTitle; ?>
	<?php endif; ?>

	<?php echo $item->beforeDisplayContent; ?>

	<?php if ($params->get('show_introtext', 1)) : ?>
		<div class="el-content jl-panel jl-margin-top">
			<?php echo strip_tags($item->introtext); ?>
		</div>
	<?php endif; ?>

	<?php echo $item->afterDisplayContent; ?>

	<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
		<?php echo '<p class="jl-margin"><a class="jl-button jl-button-text" href="' . $item->link . '">' .Text::_('JGLOBAL_READ_MORE'). '</a></p>'; ?>
	<?php endif; ?>

</div>