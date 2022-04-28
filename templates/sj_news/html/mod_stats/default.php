<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_stats
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<dl class="mod-stats stats-module<?php echo $params->get('moduleclass_sfx') ?>">
<?php foreach ($list as $item) : ?>
	<dt><?php echo $item->title; ?>:&nbsp;&nbsp;</dt>
	<dd><?php echo $item->data; ?></dd>
<?php endforeach; ?>
</dl>
