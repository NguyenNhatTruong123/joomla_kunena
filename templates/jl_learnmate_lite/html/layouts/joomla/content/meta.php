<?php

defined ('JPATH_BASE') or die();

use Joomla\CMS\Router\Route;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\Component\Content\Site\Helper\RouteHelper;

$item = $displayData;
$params = $displayData->params;

$useDefList = $params->get('show_publish_date') || $params->get('show_category') || $params->get('show_parent_category') || $params->get('show_author');

$author = $published = $category = '';

if ($params->get('show_author')) {
	$author = ($item->created_by_alias ?: $item->author);
	if (!empty($item->contact_link ) && $params->get('link_author') == true) {
		$author = HTMLHelper::_('link', $item->contact_link, $author);
	}
}

if ($params->get('show_publish_date')) {
	$published = HTMLHelper::_('date', $item->publish_up, Text::_('DATE_FORMAT_LC3'));
	$published = '<time datetime="' . HTMLHelper::_('date', $item->publish_up, 'c') . "\">$published</time>";
}

if ($params->get('show_category')) {
	$category = $item->category_title;
	if ($params->get('link_category') && !empty($item->catid)) {
		$category = JVERSION < 4 ? (HTMLHelper::_('link', Route::_(ContentHelperRoute::getCategoryRoute($item->catslug)), $category)) : (HTMLHelper::_('link', Route::_(RouteHelper::getCategoryRoute($item->catid)), $category));
	}
}

?>	

<?php if ($useDefList) : ?>
    <p class="jl-margin-top jl-margin-remove-bottom jl-article-meta">
        <?php if ($author && $published) : ?>
            <?php Text::printf('G5_META_AUTHOR_DATE', $author, $published); ?>
        <?php elseif ($author) : ?>
            <?php Text::printf('G5_META_AUTHOR', $author); ?>
        <?php elseif ($published) : ?>
            <?php Text::printf('G5_META_DATE', $published); ?>
        <?php endif; ?>

        <?php if ($category) : ?>
            <?php Text::printf('G5_META_CATEGORY', $category); ?>
        <?php endif; ?>
	</p>
<?php endif; ?>