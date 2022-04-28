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
use Joomla\CMS\Router\Route;
use Joomla\Component\Tags\Site\Helper\RouteHelper;
use Joomla\Registry\Registry;

$authorised = Factory::getUser()->getAuthorisedViewLevels();

?>
<?php if (!empty($displayData)) : ?>
	<div class="tags">
		<i class="icon-tag"></i><?php echo JText::sprintf('COM_CONTENT_TAGS'); ?>
		<?php foreach ($displayData as $i => $tag) : ?>
			<?php if (in_array($tag->access, $authorised)) : ?>
				<?php $tagParams = new Registry($tag->params); ?>
				<?php $link_class = $tagParams->get('tag_link_class', 'btn-info'); ?>
				<span class="tag tag-<?php echo $tag->tag_id; ?> tag-list<?php echo $i; ?>" itemprop="keywords">
					<a href="<?php echo Route::_(RouteHelper::getTagRoute($tag->tag_id . ':' . $tag->alias)); ?>" class="label label-info <?php echo $link_class; ?>">
						<?php echo $this->escape($tag->title); ?>
					</a>
				</span>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
