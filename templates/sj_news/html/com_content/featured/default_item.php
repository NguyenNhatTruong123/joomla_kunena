<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Associations;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Uri\Uri;
use Joomla\Component\Content\Administrator\Extension\ContentComponent;
use Joomla\Component\Content\Site\Helper\RouteHelper;

// includes placehold
$yt_temp = Factory::getApplication()->getTemplate();
include (JPATH_BASE . '/templates/'.$yt_temp.'/includes/placehold.php');

global $leadingFlag;
$doc = Factory::getDocument();
$app = Factory::getApplication();

// Create a shortcut for params.
$params  = &$this->item->params;
$images = json_decode($this->item->images);
$canEdit = $this->item->params->get('access-edit');
$info    = $this->item->params->get('info_block_position', 0);

// Check if associations are implemented. If they are, define the parameter.
$assocParam = (Associations::isEnabled() && $params->get('show_associations'));

$currentDate       = Factory::getDate()->format('Y-m-d H:i:s');
$isExpired         = !is_null($this->item->publish_down) && $this->item->publish_down < $currentDate;
$isNotPublishedYet = $this->item->publish_up > $currentDate;
$isUnpublished     = $this->item->state == ContentComponent::CONDITION_UNPUBLISHED || $isNotPublishedYet || $isExpired;
?>

<?php if ($isUnpublished) : ?>
	<div class="system-unpublished">
<?php endif; ?>
	<div class="item-content article-text">
	<?php //echo LayoutHelper::render('joomla.content.intro_image', $this->item); ?>

	<?php  if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
		<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
		<?php
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

		$imgattr =''; 
		if($templateParams->get('includeLazyload')==1){
			$imgattr = ' data-original="'.$imgsrc.'"';
			$imgsrc  = JURI::base().'templates/'.JFactory::getApplication()->getTemplate().'/images/white.gif';
		}
		?>
		<div class="pull-<?php echo htmlspecialchars($imgfloat); ?> item-image" >
			<a title="<?php echo htmlspecialchars($images->image_fulltext_alt); ?>" href="<?php echo Route::_(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)); ?>" >
				<?php //echo $thumb_img; ?>
				<img src="<?php echo $imgsrc;//echo htmlspecialchars($images->image_intro); ?>" <?php echo $imgattr; ?> alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>">
			</a>
			<?php //Hover item images ?>
			<div class="image-overlay">
				<div class="hover-links clearfix">
					<a class="hover-zoom" rel="prettyPhoto" title="<?php echo $images->image_intro_caption;?>"  href="<?php echo htmlspecialchars($images->image_fulltext); ?>"><i class="icon-external-link"></i></a>
					<a class="hover-link" href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>"><i class="icon-plus"></i></a>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($params->get('show_title')) : ?>
	<div class="page-header">
		<h2 class="article-header item-title" itemprop="headline">
		<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
			<a href="<?php echo Route::_(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)); ?>" itemprop="url">
				<?php echo $this->escape($this->item->title); ?>
			</a>
		<?php else : ?>
			<?php echo $this->escape($this->item->title); ?>
		<?php endif; ?>
		</h2>
	</div>
	<?php endif; ?>

	<?php if ($this->item->state == ContentComponent::CONDITION_UNPUBLISHED) : ?>
		<span class="badge bg-warning text-light"><?php echo Text::_('JUNPUBLISHED'); ?></span>
	<?php endif; ?>
	<?php if ($isNotPublishedYet) : ?>
		<span class="badge bg-warning text-light"><?php echo Text::_('JNOTPUBLISHEDYET'); ?></span>
	<?php endif; ?>
	<?php if ($isExpired) : ?>
		<span class="badge bg-warning text-light"><?php echo Text::_('JEXPIRED'); ?></span>
	<?php endif; ?>

	
	<?php if ($canEdit) : ?>
		<?php echo LayoutHelper::render('joomla.content.icons', array('params' => $params, 'item' => $this->item)); ?>
	<?php endif; ?>

	<?php // Content is generated by content plugin event "onContentAfterTitle" ?>
	<?php echo $this->item->event->afterDisplayTitle; ?>
	
	<div class="item-headinfo">
		<?php // Todo Not that elegant would be nice to group the params ?>
		<?php $useDefList = ($params->get('show_modify_date') || $params->get('show_publish_date') || $params->get('show_create_date')
			|| $params->get('show_hits') || $params->get('show_category') || $params->get('show_parent_category') || $params->get('show_author') || $assocParam); ?>

		<?php if ($useDefList && ($info == 0 || $info == 2)) : ?>
			<?php //echo LayoutHelper::render('joomla.content.info_block', array('item' => $this->item, 'params' => $params, 'position' => 'above')); ?>
		<?php endif; ?>
		
		<dl class="article-info">
			<?php if ($params->get('show_create_date')) : ?>
				<dd>
					<div class="create"><i class="ico-create">
						</i> <?php echo JText::sprintf('COM_CONTENT_CREATED_DATE_ON', JHtml::_('date', $this->item->modified, JText::_('DATE_FORMAT_LC'))); ?>
					</div>
				</dd>
			<?php endif; ?>
		</dl>
	</div>

	<?php // Content is generated by content plugin event "onContentBeforeDisplay" ?>
	<?php echo $this->item->event->beforeDisplayContent; ?>

	<?php echo $this->item->introtext; ?>

	<?php if ($params->get('show_readmore') && $this->item->readmore) :
		if ($params->get('access-view')) :
			$link = Route::_(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));
		else :
			$menu = Factory::getApplication()->getMenu();
			$active = $menu->getActive();
			$itemId = $active->id;
			$link = new Uri(Route::_('index.php?option=com_users&view=login&Itemid=' . $itemId, false));
			$link->setVar('return', base64_encode(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)));
		endif; ?>

		<?php //echo LayoutHelper::render('joomla.content.readmore', array('item' => $this->item, 'params' => $params, 'link' => $link)); ?>
		
		<a class="readmore" href="<?php echo $link; ?>">
			
				<?php if (!$params->get('access-view')) :
					echo JText::_('JGLOBAL_REGISTER_TO_READ_MORE');
				elseif ($readmore = $this->item->alternative_readmore) :
					echo $readmore;
					if ($params->get('show_readmore_title', 0) != 0) :
					    echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
					endif;
				elseif ($params->get('show_readmore_title', 0) == 0) :
					echo JText::sprintf('JGLOBAL_READ_MORE');	
				else :
					echo JText::_('JGLOBAL_READ_MORE');
					echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
				endif; ?></a>
				
		<?php if ($params->get('show_hits')) : ?>
			<div class="hits">
			<?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	
	<?php if ($info == 1 || $info == 2) : ?>
		<?php if ($useDefList) : ?>
			<?php echo LayoutHelper::render('joomla.content.info_block', array('item' => $this->item, 'params' => $params, 'position' => 'below')); ?>
		<?php endif; ?>
	<?php endif; ?>
	<?php if ($params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
		<div class="item-tags clearfix">
			<?php echo LayoutHelper::render('joomla.content.tags', $this->item->tags->itemTags); ?>
		</div>
	<?php endif; ?>

	<?php if ($isUnpublished) : ?>
		</div>
	<?php endif; ?>

</div>

<?php // Content is generated by content plugin event "onContentAfterDisplay" ?>
<?php echo $this->item->event->afterDisplayContent; ?>
