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
use Joomla\Component\Content\Site\Helper\RouteHelper;
?>
<?php
// Begin: dev added
global $leadingFlag;
$app = Factory::getApplication();
$doc = Factory::getDocument();
$templateParams = Factory::getApplication()->getTemplate(true)->params;
if($templateParams->get('includeLazyload')==1){
?>
	<script src="<?php echo JURI::base().'templates/'.$app->getTemplate().'/js/jquery.lazyload.js'; ?>" type="text/javascript"></script>
    <script type="text/javascript">
         jQuery(document).ready(function($){  
			 $("#yt_component img").lazyload({ 
				effect : "fadeIn",
				effect_speed: 2000,
				/*container: "#yt_component",*/
				load: function(){
					$(this).css("visibility", "visible"); 
					$(this).removeAttr("data-original");
				}
			});
        });  
    </script>
<?php 
	YTTemplateUtils::getImageResizerHelper(array(
		'background' => $templateParams->get('thumbnail_background', '#FFF'), 
		'thumbnail_mode' => $templateParams->get('thumbnail_mode', 'stretch')
		)
	);
}

// End: dev added
?>
<div class="blog blog-featured" itemscope itemtype="https://schema.org/Blog">
	<?php if ($this->params->get('show_page_heading') != 0) : ?>
	<div class="page-header">
		<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
		</h1>
	</div>
	<?php endif; ?>
	
	<?php $leadingcount = 0; ?>
	<?php if (!empty($this->lead_items)) : ?>
		<div class="row-fluid blog-items items-leading <?php echo $this->params->get('blog_class_leading'); ?>">
			<?php $leadingcol=(count($this->lead_items)); ?>
			<?php foreach ($this->lead_items as &$item) : ?>
				<div class="blog-item item col-sm-<?php echo round((12 / $leadingcol));?> span<?php echo round((12 / $leadingcol));?> leading-<?php echo $leadingcount; ?>"
					itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
						<?php
						$this->item = & $item;
						// Begin: dev edited
						$leadingFlag = 1;
						echo $this->loadTemplate('item');
						$leadingFlag = 0;
						?>
				</div>
				<?php $leadingcount++; ?>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<?php
		$introcount = (count($this->intro_items));
		$counter = 0;
	?>
	<?php if (!empty($this->intro_items)) : ?>
		<?php $blogClass = $this->params->get('blog_class', ''); ?>
		<?php if ((int) $this->params->get('num_columns') > 1) : ?>
			<?php $blogClass .= (int) $this->params->get('multi_column_order', 0) === 0 ? ' masonry-' : ' columns-'; ?>
			<?php $blogClass .= (int) $this->params->get('num_columns'); ?>
		<?php endif; ?>
		
		<?php foreach ($this->intro_items as $key => &$item) : ?>
		<?php
		$key = ($key - $leadingcount) + 1;
		//$rowcount = (((int) $key - 1) % (int) $this->params->get('num_columns')) + 1;
		$rowcount = fmod(((int) $key - 1), (int) $this->params->get('num_columns')) +1;
		if((int) $this->params->get('num_columns') > 0){
			$row = $counter / (int) $this->params->get('num_columns');
		}

		if ($rowcount == 1) : ?>
		<div class="blog-items items-row <?php echo $blogClass; ?><?php echo 'row-'.$row; ?> row-fluid">
		<?php endif; ?>
			<div class="item blog-item span<?php echo round((12 / $this->params->get('num_columns')));?>"
				itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
					<?php
					$this->item = & $item;
					echo $this->loadTemplate('item');
					?>
			</div>
			<?php $counter++; ?>
		<?php if (($rowcount == $this->params->get('num_columns')) or ($counter == $introcount)): ?>
		</div>
		<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>

	<?php if (!empty($this->link_items)) : ?>
		<div class="items-more">
			<?php echo $this->loadTemplate('links'); ?>
		</div>
	<?php endif; ?>

	<?php if ($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2 && $this->pagination->pagesTotal > 1)) : ?>
		<div class="pagination">
			<?php echo $this->pagination->getPagesLinks(); ?>
			<?php if ($this->params->def('show_pagination_results', 1)) : ?>
				<p class="counter pull-right">
					<?php echo $this->pagination->getPagesCounter(); ?>
				</p>
			<?php endif; ?>
		</div>
	<?php endif; ?>

</div>
