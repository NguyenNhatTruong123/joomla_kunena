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
	<?php foreach ($displayData as $i => $tag) : ?>
		<?php if (in_array($tag->access, $authorised)) : ?>
			<?php $seperator = $i++ < count($displayData) - 1 ? ',' : '' ?>
			<?php $tagParams = new Registry($tag->params); ?>
			<?php $link_class = trim(str_replace(['btn-info'], '', $tagParams->get('tag_link_class', ''))) ?>
				<a href="<?php echo Route::_(RouteHelper::getTagRoute($tag->tag_id . ':' . $tag->alias)); ?>" class="<?php echo $link_class; ?>"><?php echo $this->escape($tag->title); ?></a><?php echo $seperator; ?>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>