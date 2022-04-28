<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

if (!$list)
{
	return;
}

?>

<div class="jl-slider-container-offset jl-slider jl-slider-container" jl-slider="finite:true">

	<div class="jl-position-relative jl-visible-toggle" tabindex="-1">

		<ul class="jl-slider-items jl-grid jl-grid-match">

		<?php foreach ($list as $item) : ?>
			<li class="el-item jl-width-1-1 jl-width-1-3@m" tabindex="-1" itemscope itemtype="https://schema.org/Article">
				<?php require ModuleHelper::getLayoutPath('mod_articles_news', '_item_slider'); ?>
			</li>
		<?php endforeach; ?>

		</ul>

		<a class="jl-position-center-left jl-position-small jl-hidden-hover" href="#" jl-slidenav-previous jl-slider-item="previous"></a>
		<a class="jl-position-center-right jl-position-small jl-hidden-hover" href="#" jl-slidenav-next jl-slider-item="next"></a>

	</div>

<ul class="jl-slider-nav jl-dotnav jl-flex-center jl-margin"></ul>

</div>
 