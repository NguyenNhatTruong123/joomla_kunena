<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Router\Route;
use Joomla\Component\Content\Site\Helper\RouteHelper;
use Joomla\CMS\Uri\Uri;

$params  = $displayData->params;
$images  = json_decode($displayData->images);

if (empty($images->image_intro))
{
	return;
}

$imgclass   = empty($images->float_intro) ? $params->get('float_intro') : $images->float_intro;
$layoutAttr = [
	'src' => $images->image_intro,
	'alt' => empty($images->image_intro_alt) && empty($images->image_intro_alt_empty) ? false : $images->image_intro_alt,
	'class' => ($params->get('link_intro_image') && ($params->get('access-view') || $params->get('show_noauth', '0') == '1')) ? 'el-image jl-transition-scale-down jl-transition-opaque' : 'el-image',
];
?>
<div class="<?php echo $this->escape($imgclass); ?> jl-margin-top" property="image" typeof="ImageObject">
	<meta property="url" content="<?= Uri::base() . htmlspecialchars($images->image_intro, ENT_COMPAT, 'UTF-8'); ?>">
	<?php if ($params->get('link_intro_image') && ($params->get('access-view') || $params->get('show_noauth', '0') == '1')) : ?>
		<a href="<?php echo Route::_(RouteHelper::getArticleRoute($displayData->slug, $displayData->catid, $displayData->language)); ?>" itemprop="url" title="<?php echo $this->escape($displayData->title); ?>">
			<div class="jl-inline-clip jl-transition-toggle">	
				<?php echo LayoutHelper::render('joomla.html.image', array_merge($layoutAttr, ['itemprop' => 'thumbnailUrl'])); ?>
			</div>
		</a>
	<?php else : ?>
		<?php echo LayoutHelper::render('joomla.html.image', array_merge($layoutAttr, ['itemprop' => 'thumbnail'])); ?>
	<?php endif; ?>
	<?php if (isset($images->image_intro_caption) && $images->image_intro_caption !== '') : ?>
		<?php echo $this->escape($images->image_intro_caption); ?>
	<?php endif; ?>
</div>
