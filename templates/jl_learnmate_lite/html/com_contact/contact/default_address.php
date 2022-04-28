<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;
use Joomla\CMS\String\PunycodeHelper;

$icon = $this->params->get('contact_icons') == 0;

/**
 * Marker_class: Class based on the selection of text, none, or icons
 * jicon-text, jicon-none, jicon-icon
 */
?>

<div class="com-contact__address contact-address jl-child-width-1-1 jl-grid-row-small" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress" jl-grid>
	<?php if (($this->params->get('address_check') > 0) &&
		($this->item->address || $this->item->suburb  || $this->item->state || $this->item->country || $this->item->postcode)) : ?>

		<div class="jl-child-width-expand jl-grid jl-grid-column-small" jl-grid>
			<div class="jl-width-auto@m">
				<?php if ($icon && !$this->params->get('marker_address')) : ?>
					<span class="icon-address" aria-hidden="true"></span><span class="visually-hidden"><?php echo Text::_('COM_CONTACT_ADDRESS'); ?></span>
				<?php else : ?>
					<span class="<?php echo $this->params->get('marker_class'); ?>">
						<?php echo $this->params->get('marker_address'); ?>
					</span>
				<?php endif; ?>
			</div>
			<?php if ($this->item->address && $this->params->get('show_street_address')) : ?>
				<div class="jl-margin-remove-first-child">
					<div class="el-content jl-panel jl-margin-small-top">
						<span class="contact-street" itemprop="streetAddress">
							<?php echo nl2br($this->item->address, false); ?>
						</span>
					</div>
				</div>
			<?php endif; ?>
		</div>
		
		<?php if ($this->item->suburb && $this->params->get('show_suburb')) : ?>
			<div>
				<span class="contact-suburb" itemprop="addressLocality">
					<?php echo $this->item->suburb; ?>
				</span>
			</div>
		<?php endif; ?>
		<?php if ($this->item->state && $this->params->get('show_state')) : ?>
			<div>
				<span class="contact-state" itemprop="addressRegion">
					<?php echo $this->item->state; ?>
				</span>
			</div>
		<?php endif; ?>
		<?php if ($this->item->postcode && $this->params->get('show_postcode')) : ?>
			<div>
				<span class="contact-postcode" itemprop="postalCode">
					<?php echo $this->item->postcode; ?>
				</span>
			</div>
		<?php endif; ?>
		<?php if ($this->item->country && $this->params->get('show_country')) : ?>
			<div>
				<span class="contact-country" itemprop="addressCountry">
					<?php echo $this->item->country; ?>
				</span>
			</div>
		<?php endif; ?>
	<?php endif; ?>

<?php if ($this->item->email_to && $this->params->get('show_email')) : ?>
	<div class="jl-child-width-expand jl-grid jl-grid-column-small" jl-grid>
		<div class="jl-width-auto@m">
			<?php if ($icon && !$this->params->get('marker_email')) : ?>
				<span class="icon-envelope" aria-hidden="true"></span><span class="visually-hidden"><?php echo Text::_('COM_CONTACT_EMAIL_LABEL'); ?></span>
			<?php else : ?>
				<span class="<?php echo $this->params->get('marker_class'); ?>">
					<?php echo $this->params->get('marker_email'); ?>
				</span>
			<?php endif; ?>
		</div>
		<div class="jl-margin-remove-first-child">
			<div class="el-content jl-panel jl-margin-small-top">
				<span class="contact-emailto">
					<?php echo $this->item->email_to; ?>
				</span>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ($this->item->telephone && $this->params->get('show_telephone')) : ?>
	<div class="jl-child-width-expand jl-grid jl-grid-column-small" jl-grid>
		<div class="jl-width-auto@m">
			<?php if ($icon && !$this->params->get('marker_telephone')) : ?>
				<span class="icon-phone" aria-hidden="true"></span><span class="visually-hidden"><?php echo Text::_('COM_CONTACT_TELEPHONE'); ?></span>
			<?php else : ?>
				<span class="<?php echo $this->params->get('marker_class'); ?>">
					<?php echo $this->params->get('marker_telephone'); ?>
				</span>
			<?php endif; ?>
		</div>
		<div class="jl-margin-remove-first-child">
			<div class="el-content jl-panel jl-margin-small-top">
				<span class="contact-telephone" itemprop="telephone">
					<?php echo $this->item->telephone; ?>
				</span>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ($this->item->fax && $this->params->get('show_fax')) : ?>
	<div class="jl-child-width-expand jl-grid jl-grid-column-small" jl-grid>
		<div class="jl-width-auto@m">
			<?php if ($icon && !$this->params->get('marker_fax')) : ?>
				<span class="icon-fax" aria-hidden="true"></span><span class="visually-hidden"><?php echo Text::_('COM_CONTACT_FAX'); ?></span>
			<?php else : ?>
				<span class="<?php echo $this->params->get('marker_class'); ?>">
					<?php echo $this->params->get('marker_fax'); ?>
				</span>
			<?php endif; ?>
		</div>
		<div class="jl-margin-remove-first-child">
			<div class="el-content jl-panel jl-margin-small-top">
				<span class="contact-fax" itemprop="faxNumber">
					<?php echo $this->item->fax; ?>
				</span>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ($this->item->mobile && $this->params->get('show_mobile')) : ?>
	<div class="jl-child-width-expand jl-grid jl-grid-column-small" jl-grid>
		<div class="jl-width-auto@m">
			<?php if ($icon && !$this->params->get('marker_mobile')) : ?>
				<span class="icon-mobile" aria-hidden="true"></span><span class="visually-hidden"><?php echo Text::_('COM_CONTACT_MOBILE'); ?></span>
			<?php else : ?>
				<span class="<?php echo $this->params->get('marker_class'); ?>">
					<?php echo $this->params->get('marker_mobile'); ?>
				</span>
			<?php endif; ?>
		</div>
		<div class="jl-margin-remove-first-child">
			<div class="el-content jl-panel jl-margin-small-top">
				<span class="contact-mobile" itemprop="telephone">
					<?php echo $this->item->mobile; ?>
				</span>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ($this->item->webpage && $this->params->get('show_webpage')) : ?>
	<div class="jl-child-width-expand jl-grid jl-grid-column-small" jl-grid>
		<div class="jl-width-auto@m">
			<?php if ($icon && !$this->params->get('marker_webpage')) : ?>
				<span class="icon-home" aria-hidden="true"></span><span class="visually-hidden"><?php echo Text::_('COM_CONTACT_WEBPAGE'); ?></span>
			<?php else : ?>
				<span class="<?php echo $this->params->get('marker_class'); ?>">
					<?php echo $this->params->get('marker_webpage'); ?>
				</span>
			<?php endif; ?>
		</div>
		<div class="jl-margin-remove-first-child">
			<div class="el-content jl-panel jl-margin-small-top">
				<span class="contact-webpage">
					<a href="<?php echo $this->item->webpage; ?>" target="_blank" rel="noopener noreferrer" itemprop="url">
					<?php echo PunycodeHelper::urlToUTF8($this->item->webpage); ?></a>
				</span>
			</div>
		</div>
	</div>
<?php endif; ?>

</div>
