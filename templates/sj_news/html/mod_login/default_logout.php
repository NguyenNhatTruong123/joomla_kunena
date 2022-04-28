<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_login
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

HTMLHelper::_('behavior.keepalive');
?>
<div class="day-login">
	<p class="sj-day">
      <?php 
        $db	 = Factory::getDBO();
        $query = 'SELECT created FROM #__content a ORDER BY created DESC LIMIT 1';
        $db->setQuery($query);
        $data = $db->loadObject();
        if( $data->created ){  //return gmdate( 'h:i:s A', strtotime($data->created) ) .' GMT ';
             $date =Factory::getDate(strtotime($data->created));
             $user =Factory::getUser();
             $tz = $user->getParam('timezone');
             $sec =$date->toUNIX();   //set the date time to second
             echo "<span class=\"date\">".date('d F Y')."</span> Last <span class=\"gmdate\">updated at ".gmdate("h:i ", $sec+$tz)." GMT</span>";
        }
        
      ?>
    </p>

		<form class="mod-login-logout form-vertical" action="<?php echo Route::_('index.php', true); ?>" method="post" id="login-form-<?php echo $module->id; ?>">
		<?php if ($params->get('greeting', 1)) : ?>
			<ul class="sj-login-regis">
				<li class="sj-logout">
					<div class="login-greeting logout-button">
						<span>
							<span>
							<?php if (!$params->get('name', 0)) : ?>
								<?php echo Text::sprintf('MOD_LOGIN_HINAME', htmlspecialchars($user->get('name'), ENT_COMPAT, 'UTF-8')); ?>
							<?php else : ?>
								<?php echo Text::sprintf('MOD_LOGIN_HINAME', htmlspecialchars($user->get('username'), ENT_COMPAT, 'UTF-8')); ?>
							<?php endif; ?>
							</span>
						</span>
						
						<a href="javascript:;" name="Submit" class="logout-switch" onclick="$('login-form-<?php echo $module->id; ?>').submit();">
							<span>
								<?php echo JText::_('JLOGOUT'); ?>
							</span>
						</a>
						<div class="mod-login-logout__button logout-button">
							<!--input type="submit" name="Submit" class="btn btn-primary" value="<?php echo Text::_('JLOGOUT'); ?>"-->
							<input type="hidden" name="option" value="com_users">
							<input type="hidden" name="task" value="user.logout">
							<input type="hidden" name="return" value="<?php echo $return; ?>">
							<?php echo HTMLHelper::_('form.token'); ?>
						</div>
					</div>
				</li>
			</ul>
		<?php endif; ?>
		
			
		</form>
</div>