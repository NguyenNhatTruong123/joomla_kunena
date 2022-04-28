<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ContentHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\FileLayout;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Router\Route;
use Joomla\Component\Contact\Site\Helper\RouteHelper;

$tparams = $this->item->params;
$canDo   = ContentHelper::getActions('com_contact', 'category', $this->item->catid);
$canEdit = $canDo->get('core.edit') || ($canDo->get('core.edit.own') && $this->item->created_by === Factory::getUser()->id);
$htag    = $tparams->get('show_page_heading') ? 'h2' : 'h1';
?>

<div class="com-contact contact" itemscope itemtype="https://schema.org/Person">
	<?php if ($tparams->get('show_page_heading')) : ?>
		<h1>
			<?php echo $this->escape($tparams->get('page_heading')); ?>
		</h1>
	<?php endif; ?>
	
	<?php if ($this->item->image && $tparams->get('show_image')) : ?>
		<div class="com-contact__thumbnail contact-image">
			<?php echo HTMLHelper::_(
				'image',
				$this->item->image,
				htmlspecialchars($this->item->name,  ENT_QUOTES, 'UTF-8'),
				array('itemprop' => 'image')
			); ?>
			
			<?php if ($tparams->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
			<div class="com-contact__tags">
				<?php $this->item->tagLayout = new FileLayout('joomla.content.tags'); ?>
				<?php echo $this->item->tagLayout->render($this->item->tags->itemTags); ?>
			</div>
	<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php if ($this->item->name && $tparams->get('show_name')) : ?>
		<div>
			<<?php echo $htag; ?> class="title">
				<?php if ($this->item->published == 0) : ?>
					<span class="badge bg-warning text-light"><?php echo Text::_('JUNPUBLISHED'); ?></span>
				<?php endif; ?>
				<span class="contact-name" itemprop="name"><?php echo $this->item->name; ?></span>
			</<?php echo $htag; ?>>
		</div>
	<?php endif; ?>

	<?php if ($canEdit) : ?>
		<div class="icons">
			<div class="float-end">
				<div>
					<?php echo HTMLHelper::_('contacticon.edit', $this->item, $tparams); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php $show_contact_category = $tparams->get('show_contact_category'); ?>

	<?php if ($show_contact_category === 'show_no_link') : ?>
		<h3>
			<span class="contact-category"><?php echo $this->item->category_title; ?></span>
		</h3>
	<?php elseif ($show_contact_category === 'show_with_link') : ?>
		<?php $contactLink = RouteHelper::getCategoryRoute($this->item->catid, $this->item->language); ?>
		<h3>
			<span class="contact-category"><a href="<?php echo $contactLink; ?>">
				<?php echo $this->escape($this->item->category_title); ?></a>
			</span>
		</h3>
	<?php endif; ?>

	<?php echo $this->item->event->afterDisplayTitle; ?>

	<?php if ($tparams->get('show_contact_list') && count($this->contacts) > 1) : ?>
		<form action="#" method="get" name="selectForm" id="selectForm">
			<label for="select_contact"><?php echo Text::_('COM_CONTACT_SELECT_CONTACT'); ?></label>
			<?php echo HTMLHelper::_(
				'select.genericlist',
				$this->contacts,
				'select_contact',
				'class="form-select" onchange="document.location.href = this.value"', 'link', 'name', $this->item->link);
			?>
		</form>
	<?php endif; ?>

	<?php echo $this->item->event->beforeDisplayContent; ?>

	<?php if ($this->params->get('show_info', 1)) : ?>

		<div class="com-contact__container">
			<?php //echo '<h3>' . Text::_('COM_CONTACT_DETAILS') . '</h3>'; ?>

			<?php if ($this->item->con_position && $tparams->get('show_position')) : ?>
				<h2 class="subtitle"><?php echo $this->item->con_position; ?></h2>
			<?php endif; ?>

			<div class="com-contact__info">
				<?php echo $this->loadTemplate('address'); ?>

				<?php if ($tparams->get('allow_vcard')) : ?>
					<?php echo Text::_('COM_CONTACT_DOWNLOAD_INFORMATION_AS'); ?>
					<a href="<?php echo Route::_('index.php?option=com_contact&amp;view=contact&amp;id=' . $this->item->id . '&amp;format=vcf'); ?>">
					<?php echo Text::_('COM_CONTACT_VCARD'); ?></a>
				<?php endif; ?>
			</div>
		</div>

	<?php endif; ?>
	
	<?php if ($this->item->misc && $tparams->get('show_misc')) : ?>
		<div class="com-contact__miscinfo contact-miscinfo">
		<?php echo '<h3 class="jicons-text">' . Text::_('COM_CONTACT_OTHER_INFORMATION') . '</h3>'; ?>	
			<span class="contact-misc">
				<?php echo $this->item->misc; ?>
			</span>
		</div>
	<?php endif; ?>

	<?php if ($tparams->get('show_email_form') && ($this->item->email_to || $this->item->user_id)) : ?>
		<?php echo '<h3 class="jicons-text">' . Text::_('COM_CONTACT_EMAIL_FORM') . '</h3>'; ?>

		<?php echo $this->loadTemplate('form'); ?>
	<?php endif; ?>

	<?php if ($tparams->get('show_links')) : ?>
		<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>

	<?php if ($tparams->get('show_articles') && $this->item->user_id && $this->item->articles) : ?>
		<?php echo '<h3>' . Text::_('JGLOBAL_ARTICLES') . '</h3>'; ?>

		<?php echo $this->loadTemplate('articles'); ?>
	<?php endif; ?>

	<?php if ($tparams->get('show_profile') && $this->item->user_id && PluginHelper::isEnabled('user', 'profile')) : ?>
		<?php echo '<h3>' . Text::_('COM_CONTACT_PROFILE') . '</h3>'; ?>

		<?php echo $this->loadTemplate('profile'); ?>
	<?php endif; ?>

	<?php if ($tparams->get('show_user_custom_fields') && $this->contactUser) : ?>
		<?php echo $this->loadTemplate('user_custom_fields'); ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->afterDisplayContent; ?>
</div>
