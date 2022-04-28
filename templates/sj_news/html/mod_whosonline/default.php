<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_whosonline
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

?>

<div class="mod-whosonline">
	<div class="who-online">
	<div class="icon-group"></div>
	<div class="online_content">
		<h3 class="google-font"><?php echo JText::_('WHO_ONLINE');?></h3>
		<?php if ($showmode == 0 || $showmode == 2) : ?>
			<?php $guest = Text::plural('MOD_WHOSONLINE_GUESTS', $count['guest']); ?>
			<?php $member = Text::plural('MOD_WHOSONLINE_MEMBERS', $count['user']); ?>
			<p><?php echo Text::sprintf('MOD_WHOSONLINE_WE_HAVE', $guest, $member); ?></p>
		<?php endif; ?>

		<?php if (($showmode > 0) && count($names)) : ?>
			<?php if ($params->get('filter_groups', 0)) : ?>
				<p><?php echo Text::_('MOD_WHOSONLINE_SAME_GROUP_MESSAGE'); ?></p>
			<?php endif; ?>
			<ul class="nav flex-column">
			<?php foreach ($names as $name) : ?>
				<li>
					<?php echo $name->username; ?>
				</li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
	</div>
</div>
