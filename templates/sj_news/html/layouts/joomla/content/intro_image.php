<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Router\Route;
use Joomla\Component\Content\Site\Helper\RouteHelper;
use Joomla\Utilities\ArrayHelper;

// includes placehold
$yt_temp = Factory::getApplication()->getTemplate();
include (JPATH_BASE . '/templates/'.$yt_temp.'/includes/placehold.php');

$params  = $displayData->params;
$images  = json_decode($displayData->images);

global $leadingFlag;
$doc = Factory::getDocument();
$app = Factory::getApplication();
$templateParams = Factory::getApplication()->getTemplate(true)->params;

if (empty($images->image_intro))
{
	return;
}

$imgclass  = empty($images->float_intro) ? $params->get('float_intro') : $images->float_intro;
$extraAttr = '';
$img       = HTMLHelper::cleanImageURL($images->image_intro);
$alt       = empty($images->image_intro_alt) && empty($images->image_intro_alt_empty) ? '' : 'alt="' . htmlspecialchars($images->image_intro_alt, ENT_COMPAT, 'UTF-8') . '"';


// Begin:  The way to resize your image.
$templateParams = JFactory::getApplication()->getTemplate(true)->params;
YTTemplateUtils::getImageResizerHelper(array(
	'background' => $templateParams->get('thumbnail_background', '#000'), 
	'thumbnail_mode' => $templateParams->get('thumbnail_mode', 'fit')
	)
);
$imgW = (isset($leadingFlag) && $leadingFlag)?$templateParams->get('leading_width', '300'):$templateParams->get('intro_width', '200');
$imgH = (isset($leadingFlag) && $leadingFlag)?$templateParams->get('leading_height', '300'):$templateParams->get('intro_height', '200');
$imgsrc = YTTemplateUtils::resize($images->image_intro, $imgW, $imgH);

//Create placeholder items images
$src = $images->image_intro;
if (file_exists(JPATH_BASE . '/' . $src)) {								
	$thumb_img = '<img src="'.$imgsrc.'" alt="'.$images->image_intro_alt.'" />';
	$full_img =  JURI::base().'/'.htmlspecialchars($images->image_intro);
} else if ($is_placehold) {					
	$thumb_img = yt_placehold($placehold_size['listing']);
	$full_img  = 'http://placehold.it/'.$placehold_size['article'].'/969696';
}	
	
// Set lazyloading only for images which have width and height attributes
if ((isset($img->attributes['width']) && (int) $img->attributes['width'] > 0)
&& (isset($img->attributes['height']) && (int) $img->attributes['height'] > 0))
{
	$extraAttr = ArrayHelper::toString($img->attributes) . ' loading="lazy"';
}

$imgattr =''; 
if($templateParams->get('includeLazyload')==1){
	$imgattr = ' data-original="'.$imgsrc.'"';
	$imgsrc  = JURI::base().'templates/'.JFactory::getApplication()->getTemplate().'/images/white.gif';
}
?>
<figure class="pull-<?php echo htmlspecialchars($imgclass, ENT_COMPAT, 'UTF-8'); ?> item-image">
	<?php if ($params->get('link_intro_image') && ($params->get('access-view') || $params->get('show_noauth', '0') == '1')) : ?>
		<a rel="prettyPhoto" href="<?php echo Route::_(RouteHelper::getArticleRoute($displayData->slug, $displayData->catid, $displayData->language)); ?>"
			itemprop="url" title="<?php echo $this->escape($displayData->title); ?>">
			<img src="<?php echo $imgsrc;//echo htmlspecialchars($img->url, ENT_COMPAT, 'UTF-8'); ?>"
					 <?php echo $alt; ?>
					 itemprop="thumbnailUrl"
					 <?php echo $extraAttr; ?>
			/>
		</a>
	<?php else : ?>
		<!--a href="<?php echo Route::_(RouteHelper::getArticleRoute($displayData->slug, $displayData->catid, $displayData->language)); ?>"
			itemprop="url" title="<?php echo $this->escape($displayData->title); ?>"-->
			<img src="<?php echo $imgsrc; //echo htmlspecialchars($img->url, ENT_COMPAT, 'UTF-8'); ?>"
				 <?php echo $alt; ?>
				 itemprop="thumbnail"
				 <?php echo $extraAttr; ?> <?php echo $imgattr; ?>
			/>
			<?php //Hover item images ?>
			<?php //var_dump( $images) ;die();?>
			<div class="image-overlay">
				<div class="hover-links clearfix">
					<a class="hover-zoom" rel="prettyPhoto" title="<?php echo $images->image_intro_caption;?>"  href="<?php echo htmlspecialchars($images->image_intro); ?>"><i class="icon-external-link"></i></a>
					<a class="hover-link" href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($displayData->slug, $displayData->catid)); ?>"><i class="icon-plus"></i></a>
				</div>
			</div>
		<!--/a-->
	<?php endif; ?>
	<?php if (isset($images->image_intro_caption) && $images->image_intro_caption !== '') : ?>
		<figcaption class="caption"><?php echo htmlspecialchars($images->image_intro_caption, ENT_COMPAT, 'UTF-8'); ?></figcaption>
	<?php endif; ?>
</figure>
