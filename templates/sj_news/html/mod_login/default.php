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
use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Router\Route;

$app->getDocument()->getWebAssetManager()
	->useScript('core')
	->useScript('keepalive')
	->useScript('field.passwordview');

Text::script('JSHOWPASSWORD');
Text::script('JHIDEPASSWORD');
?>
<div class="day-login">
	<p class="sj-day">
      <?php 
        $db	 = Factory::getDBO();
        $query = 'SELECT created FROM #__content a ORDER BY created DESC LIMIT 1';
        $db->setQuery($query);
        $data = $db->loadObject();
        if( $data->created ){  //return gmdate( 'h:i:s A', strtotime($data->created) ) .' GMT ';
             $date = Factory::getDate(strtotime($data->created));
             $user = Factory::getUser();
             $tz = $user->getParam('timezone');
             $sec =$date->toUNIX();   //set the date time to second
             echo "<span class=\"date\">".date('d F Y')."</span> Last <span class=\"gmdate\">updated at ".gmdate("h:i ", $sec+$tz)." GMT</span>";
        }
        
      ?>
    </p>
	<ul class="sj-login-regis">
		<?php
				$usersConfig = ComponentHelper::getParams('com_users'); ?>
		<?php if ($usersConfig->get('allowUserRegistration')) : ?>
		
		<li class="sj-register">
			<a class="register-switch text-font" href="<?php echo Route::_($registerLink); ?>">
				<span class="title-link"><?php echo JText::_('JREGISTER');?></span>
			</a>
		</li>
		<?php endif; ?>
		<li class="line">|</li>
		<li class="sj-login">
			<a class="login-switch text-font" href="#mod-login" data-bs-toggle="modal" data-bs-target="#mod-login" title="<?php JText::_('Login');?>">
			<!--a href="#mod-login" role="button" class="login-switch text-font" title="<?php JText::_('Login');?>" data-toggle="modal"-->
				<span class="title-link"><?php echo JText::_('JLOGIN'); ?></span>
			</a>
			<div class="modal fade" id="mod-login" tabindex="-1" aria-labelledby="myLogin" aria-hidden="true">
			<!--div id="mod-login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true-->
				<div class="modal-dialog">
					<div class="modal-content">
						<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button-->
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">x</button>
						<div id="sj_login_box" class="show-box modal-body">
							<div class="sj_box_inner">
								<div class="sj_box_title google-font">
									<h3 class="google-font"><?php echo JText::_('SINGIN'); ?></h3>
								</div>
								<div class="sj_box_content">
									<form id="login-form-<?php echo $module->id; ?>" class="mod-login" action="<?php echo Route::_('index.php', true); ?>" method="post">

										<?php if ($params->get('pretext')) : ?>
											<div class="mod-login__pretext pretext">
												<p><?php echo $params->get('pretext'); ?></p>
											</div>
										<?php endif; ?>

										<div class="userdata">
											<div class="login_input">
												<div class="mod-login__username form-group">
													<?php if (!$params->get('usetext', 0)) : ?>
														<div class="input-group">
															<input id="modlgn-username-<?php echo $module->id; ?>" type="text" name="username" class="form-control" autocomplete="username" placeholder="<?php echo Text::_('MOD_LOGIN_VALUE_USERNAME'); ?>">
															<label for="modlgn-username-<?php echo $module->id; ?>" class="visually-hidden"><?php echo Text::_('MOD_LOGIN_VALUE_USERNAME'); ?></label>
															<span class="input-group-text" title="<?php echo Text::_('MOD_LOGIN_VALUE_USERNAME'); ?>">
																<span class="icon-user icon-fw" aria-hidden="true"></span>
															</span>
														</div>
													<?php else : ?>
														<label for="modlgn-username-<?php echo $module->id; ?>"><?php echo Text::_('MOD_LOGIN_VALUE_USERNAME'); ?></label>
														<input id="modlgn-username-<?php echo $module->id; ?>" type="text" name="username" class="form-control" autocomplete="username" placeholder="<?php echo Text::_('MOD_LOGIN_VALUE_USERNAME'); ?>">
													<?php endif; ?>
												</div>

												<div class="mod-login__password form-group">
													<?php if (!$params->get('usetext', 0)) : ?>
														<div class="input-group">
															<input id="modlgn-passwd-<?php echo $module->id; ?>" type="password" name="password" autocomplete="current-password" class="form-control" placeholder="<?php echo Text::_('JGLOBAL_PASSWORD'); ?>">
															<label for="modlgn-passwd-<?php echo $module->id; ?>" class="visually-hidden"><?php echo Text::_('JGLOBAL_PASSWORD'); ?></label>
															<button type="button" class="btn btn-secondary input-password-toggle">
																<span class="icon-eye icon-fw" aria-hidden="true"></span>
																<span class="visually-hidden"><?php echo Text::_('JSHOWPASSWORD'); ?></span>
															</button>
														</div>
													<?php else : ?>
														<label for="modlgn-passwd-<?php echo $module->id; ?>"><?php echo Text::_('JGLOBAL_PASSWORD'); ?></label>
														<input id="modlgn-passwd-<?php echo $module->id; ?>" type="password" name="password" autocomplete="current-password" class="form-control" placeholder="<?php echo Text::_('JGLOBAL_PASSWORD'); ?>">
													<?php endif; ?>
												</div>
											
											</div>
											<div class="link-forgot">
												<?php
													$usersConfig = ComponentHelper::getParams('com_users'); ?>
													<ul>
														<li>
															<a href="<?php echo Route::_('index.php?option=com_users&view=reset'); ?>">
															<?php echo Text::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?></a>
														</li>
														<li>
															<a href="<?php echo Route::_('index.php?option=com_users&view=remind'); ?>">
															<?php echo Text::_('MOD_LOGIN_FORGOT_YOUR_USERNAME'); ?></a>
														</li>
														<?php if ($usersConfig->get('allowUserRegistration')) : ?>
														<li>
															<a href="<?php echo Route::_($registerLink); ?>">
															<?php echo Text::_('MOD_LOGIN_REGISTER'); ?> <span class="icon-register" aria-hidden="true"></span></a>
														</li>
														<?php endif; ?>
													</ul>
											</div>
											
											<div class="login_button">
												<?php if (count($twofactormethods) > 1) : ?>
													<div class="mod-login__twofactor form-group">
														<?php if (!$params->get('usetext', 0)) : ?>
															<div class="input-group">
																<span class="input-group-text">
																	<span class="icon-star" aria-hidden="true"></span>
																</span>
																<label for="modlgn-secretkey-<?php echo $module->id; ?>" class="visually-hidden"><?php echo Text::_('JGLOBAL_SECRETKEY'); ?></label>
																<input id="modlgn-secretkey-<?php echo $module->id; ?>" autocomplete="one-time-code" type="text" name="secretkey" class="form-control" placeholder="<?php echo Text::_('JGLOBAL_SECRETKEY'); ?>">
																<span class="input-group-text">
																	<span class="icon-question icon-fw" aria-hidden="true"></span>
																</span>
															</div>
														<?php else : ?>
															<label for="modlgn-secretkey-<?php echo $module->id; ?>"><?php echo Text::_('JGLOBAL_SECRETKEY'); ?></label>
															<div class="input-group">
																<input id="modlgn-secretkey-<?php echo $module->id; ?>" autocomplete="one-time-code" type="text" name="secretkey" class="form-control" placeholder="<?php echo Text::_('JGLOBAL_SECRETKEY'); ?>">
																<span class="input-group-text">
																	<span class="icon-question icon-fw" aria-hidden="true"></span>
																</span>
															</div>
														<?php endif; ?>
													</div>
												<?php endif; ?>

												<?php if (PluginHelper::isEnabled('system', 'remember')) : ?>
													<div class="mod-login__remember form-group">
														<div id="form-login-remember-<?php echo $module->id; ?>" class="form-check">
															<label class="form-check-label">
																<input type="checkbox" name="remember" class="form-check-input" value="yes">
																<?php echo Text::_('MOD_LOGIN_REMEMBER_ME'); ?>
															</label>
														</div>
													</div>
												<?php endif; ?>

												<?php foreach($extraButtons as $button):
													$dataAttributeKeys = array_filter(array_keys($button), function ($key) {
														return substr($key, 0, 5) == 'data-';
													});
													?>
													<div class="mod-login__submit form-group">
														<button type="button"
																class="btn btn-secondary button w-100 mt-4 <?php echo $button['class'] ?? '' ?>"
																<?php foreach ($dataAttributeKeys as $key): ?>
																<?php echo $key ?>="<?php echo $button[$key] ?>"
																<?php endforeach; ?>
																<?php if ($button['onclick']): ?>
																onclick="<?php echo $button['onclick'] ?>"
																<?php endif; ?>
																title="<?php echo Text::_($button['label']) ?>"
																id="<?php echo $button['id'] ?>"
																>
															<?php if (!empty($button['icon'])): ?>
																<span class="<?php echo $button['icon'] ?>"></span>
															<?php elseif (!empty($button['image'])): ?>
																<?php echo $button['image']; ?>
															<?php elseif (!empty($button['svg'])): ?>
																<?php echo $button['svg']; ?>
															<?php endif; ?>
															<?php echo Text::_($button['label']) ?>
														</button>
													</div>
												<?php endforeach; ?>

												<div class="mod-login__submit form-group">
													<button type="submit" name="Submit" class="btn button btn-primary"><?php echo Text::_('JLOGIN'); ?></button>
												</div>
											</div>
											<input type="hidden" name="option" value="com_users">
											<input type="hidden" name="task" value="user.login">
											<input type="hidden" name="return" value="<?php echo $return; ?>">
											<?php echo HTMLHelper::_('form.token'); ?>
											
										</div>
										<?php if ($params->get('posttext')) : ?>
											<div class="mod-login__posttext posttext">
												<p><?php echo $params->get('posttext'); ?></p>
											</div>
										<?php endif; ?>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</li>
	</ul>
</div>