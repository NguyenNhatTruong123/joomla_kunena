<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   (C) 2009 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Router\Route;

HTMLHelper::_('behavior.keepalive');
HTMLHelper::_('behavior.formvalidator');

$usersConfig = ComponentHelper::getParams('com_users');

?>

<div class="com-users-login login jl-grid jl-flex jl-flex-center" jl-grid>
	
	<div class="jl-width-large jl-card jl-card-default jl-card-body jl-margin-remove-first-child">
		<?php if ($this->params->get('show_page_heading')) : ?>
			<h1 class="jl-margin-remove jl-h3">
				<?php echo $this->escape($this->params->get('page_heading')); ?>
			</h1>
		<?php endif; ?>

		<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
		<div class="com-users-login__description login-description">
		<?php endif; ?>

			<?php if ($this->params->get('logindescription_show') == 1) : ?>
				<?php echo $this->params->get('login_description'); ?>
			<?php endif; ?>

			<?php if ($this->params->get('login_image') != '') : ?>
				<?php echo LayoutHelper::render('joomla.html.image', ['src' => $this->params->get('login_image'), 'class' => 'com-users-login__image login-image', 'alt' => empty($this->params->get('login_image_alt')) && empty($this->params->get('login_image_alt_empty')) ? false : $this->params->get('login_image_alt')]); ?>
			<?php endif; ?>

		<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
		</div>
		<?php endif; ?>

		<form action="<?php echo Route::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="com-users-login__form form-validate form-horizontal well" id="com-users-login__form">

			<fieldset class="jl-fieldset">
				<?php echo $this->form->renderFieldset('credentials', ['class' => 'com-users-login__input']); ?>

				<?php if ($this->tfa) : ?>
					<?php echo $this->form->renderField('secretkey', null, null, ['class' => 'com-users-login__secretkey']); ?>
				<?php endif; ?>


				<div class="jl-grid-medium jl-child-width-auto jl-flex-middle jl-grid" jl-grid>

					<?php if (PluginHelper::isEnabled('system', 'remember')) : ?>
						<div class="com-users-login__remember">
							<div class="form-check">
								<input class="form-check-input" id="remember" type="checkbox" name="remember" value="yes">
								<label class="form-check-label" for="remember">
									<?php echo Text::_('COM_USERS_LOGIN_REMEMBER_ME'); ?>
								</label>
							</div>
						</div>
					<?php endif; ?>

					<div class="jl-margin-auto-left">
						<a class="com-users-login__reset" href="<?php echo Route::_('index.php?option=com_users&view=reset'); ?>">
							<?php echo Text::_('COM_USERS_LOGIN_RESET'); ?>
						</a>
					</div>

				</div>

				<?php foreach ($this->extraButtons as $button):
					$dataAttributeKeys = array_filter(array_keys($button), function ($key) {
						return substr($key, 0, 5) == 'data-';
					});
					?>
					<div class="com-users-login__submit control-group">
						<div class="controls">
							<button type="button"
									class="jl-button jl-button-primary jl-width-1-1"
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
									<?php echo HTMLHelper::_('image', $button['image'], Text::_($button['tooltip'] ?? ''), [
										'class' => 'icon',
									], true) ?>
								<?php elseif (!empty($button['svg'])): ?>
									<?php echo $button['svg']; ?>
								<?php endif; ?>
								<?php echo Text::_($button['label']) ?>
							</button>
						</div>
					</div>
				<?php endforeach; ?>

				<div class="com-users-login__submit control-group">
					<div class="controls">
						<button type="submit" class="jl-button jl-button-primary jl-width-1-1">
							<?php echo Text::_('JLOGIN'); ?>
						</button>
					</div>
				</div>

			<?php $return = $this->form->getValue('return', '', $this->params->get('login_redirect_url', $this->params->get('login_redirect_menuitem', ''))); ?>
			<input type="hidden" name="return" value="<?php echo base64_encode($return); ?>">
			<?php echo HTMLHelper::_('form.token'); ?>

			</fieldset>
		</form>
		<div class="jl-width-medium jl-text-center jl-margin-auto jl-margin-small-top">
			<a class="com-users-login__remind" href="<?php echo Route::_('index.php?option=com_users&view=remind'); ?>">
				<?php echo Text::_('COM_USERS_LOGIN_REMIND'); ?>
			</a>
			<?php if ($usersConfig->get('allowUserRegistration')) : ?>
				<a class="com-users-login__register" href="<?php echo Route::_('index.php?option=com_users&view=registration'); ?>">
					<?php echo Text::_('COM_USERS_LOGIN_REGISTER'); ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
</div>

