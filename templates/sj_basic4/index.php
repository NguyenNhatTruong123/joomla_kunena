<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.cassiopeia
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Uri\Uri;

/** @var Joomla\CMS\Document\HtmlDocument $this */

$app = Factory::getApplication();
$wa  = $this->getWebAssetManager();

// Browsers support SVG favicons
$this->addHeadLink(HTMLHelper::_('image', 'joomla-favicon.svg', '', [], true, 1), 'icon', 'rel', ['type' => 'image/svg+xml']);
$this->addHeadLink(HTMLHelper::_('image', 'favicon.ico', '', [], true, 1), 'alternate icon', 'rel', ['type' => 'image/vnd.microsoft.icon']);
$this->addHeadLink(HTMLHelper::_('image', 'joomla-favicon-pinned.svg', '', [], true, 1), 'mask-icon', 'rel', ['color' => '#000']);

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
$menu     = $app->getMenu()->getActive();
$pageclass = $menu !== null ? $menu->getParams()->get('pageclass_sfx', '') : '';

// Template path
$templatePath = 'templates/' . $this->template;

// Color Theme
$paramsColorName = $this->params->get('colorName', 'colors_standard');
$assetColorName  = 'theme.' . $paramsColorName;
$wa->registerAndUseStyle($assetColorName, $templatePath . '/css/global/' . $paramsColorName . '.css');

// Use a font scheme if set in the template style options
$paramsFontScheme = $this->params->get('useFontScheme', false);
$fontStyles       = '';

if ($paramsFontScheme)
{
	// Prefetch the stylesheet for the font scheme, actually we need to prefetch the font(s)
	$assetFontScheme  = 'fontscheme.' . $paramsFontScheme;
	$wa->registerAndUseStyle($assetFontScheme, $templatePath . '/css/global/' . $paramsFontScheme . '.css');
	$this->getPreloadManager()->prefetch($wa->getAsset('style', $assetFontScheme)->getUri(), ['as' => 'style']);
}

// Enable assets
$wa->usePreset('template.sj_basic4.' . ($this->direction === 'rtl' ? 'rtl' : 'ltr'))
	->useStyle('template.active.language')
	->useScript('template.jquery')
	->useScript('template.bootstrap4')
	//->useScript('template.bootstrap5')
	->useStyle('template.icomoon')
	->useStyle('template.sj-basic4')
	->useStyle('template.user')
	->useScript('template.user');

// Override 'template.active' asset to set correct ltr/rtl dependency
$wa->registerStyle('template.active', '', [], [], ['template.sj_basic4.' . ($this->direction === 'rtl' ? 'rtl' : 'ltr')]);

// Preload the stylesheet for the font, actually we need to preload the font
$this->getPreloadManager()->preload('https://fonts.googleapis.com/css?family=Open+Sans:400', array('as' => 'style'));

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . Uri::root(true) . '/' . htmlspecialchars($this->params->get('logoFile'), ENT_QUOTES) . '" alt="' . $sitename . '">';
}
elseif ($this->params->get('siteTitle'))
{
	$logo = '<span title="' . $sitename . '">' . htmlspecialchars($this->params->get('siteTitle'), ENT_COMPAT, 'UTF-8') . '</span>';
}
else
{
	$logo = HTMLHelper::_('image', 'logo.png', $sitename, ['class' => 'logo d-inline-block'], true, 0);
}

$hasClass = '';

if ($this->countModules('sidebar-left', true))
{
	$hasClass .= ' has-sidebar-left';
}

if ($this->countModules('sidebar-right', true))
{
	$hasClass .= ' has-sidebar-right';
}

// Container
$wrapper = $this->params->get('fluidContainer') ? 'wrapper-boxed' : 'wrapper-fluid';

$this->setMetaData('viewport', 'width=device-width, initial-scale=1');

$stickyHeader = $this->params->get('stickyHeader') ? 'position-sticky sticky-top' : '';

// Defer font awesome
//$wa->getAsset('style', 'fontawesome')->setAttribute('rel', 'lazy-stylesheet');

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="metas" />
	<jdoc:include type="styles" />
	<jdoc:include type="scripts" />
</head>

<body class="site <?php echo $option
	. ' ' . $wrapper
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($pageclass ? ' ' . $pageclass : '')
	. $hasClass
	. ($this->direction == 'rtl' ? ' rtl' : '');
?>">
	 <div class="body-wrapper">
        <div class="body-innerwrapper">
			<header id="header" class="header full-width <?php echo $stickyHeader ? ' ' . $stickyHeader : ''; ?>">	
				<div class="container-headera">
					<div class="header-top">
						<div class="container">
							<div class="row">
								<?php if ($this->countModules('top-1', true)) : ?>
								<div class="col-sm-6 col-md-6 col-lg-6 top-1">
									<jdoc:include type="modules" name="top-1" style="none" />
								</div>
								<?php endif; ?>
								<?php if ($this->countModules('top-2', true)) : ?>
								<div class="col-sm-6 col-md-6 col-lg-6 top-2">
									<jdoc:include type="modules" name="top-2" style="none" />
								</div>
								<?php endif; ?>
							</div>
						</div>	
					</div>
					
					<div class="header-middle">
						<div class="container">
							<div class="row">
								<?php if ($this->countModules('user-1', true)) : ?>
								<div class="col-sm-4 col-md-4 col-lg-4 user-1">
									<jdoc:include type="modules" name="user-1" style="none" />
								</div>
								<?php endif; ?>
								<?php if ($this->countModules('user-1', true) && $this->countModules('user-2', true)) : ?>
								<div class="col-6 a col-sm-4 col-md-4 col-lg-4 logo">
								<?php else: ?>
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 logo">
								<?php endif; ?>
									<a href="<?php echo $this->baseurl; ?>/">
										<?php echo $logo; ?>
									</a>					
								</div>
								<?php if ($this->countModules('user-2', true)) : ?>
								<div class="col-6 col-sm-4 col-md-4 col-lg-4 user-2">
										<jdoc:include type="modules" name="user-2" style="none" />				
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					
					<div class="header-bottom">
						<div class="container">
							<div class="row">
								<nav class="main-menu col-sm-12 col-md-12 col-lg-12">
									<?php if ($this->countModules('menu', true)) : ?>
										<jdoc:include type="modules" name="menu" style="none" />
									<?php endif; ?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>
			
			<?php if ($this->countModules('position-1', true) || $this->countModules('position-2', true) || $this->countModules('position-3', true)) : ?>
			<div id="section1">
				<div class="container">
					<div class="row">
						<?php if ($this->countModules('position-1', true)) : ?>
						<div class="col-sm-6 col-md-6 col-lg-6">
							<jdoc:include type="modules" name="position-1" style="default" />
						</div>
						<?php endif; ?>			

						<?php if ($this->countModules('position-2', true)) : ?>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<jdoc:include type="modules" name="position-2" style="default" />
						</div>
						<?php endif; ?>
						
						<?php if ($this->countModules('position-3', true)) : ?>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<jdoc:include type="modules" name="position-3" style="default" />
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if ($this->countModules('position-4', true) || $this->countModules('position-5', true)) : ?>
			<div id="section2">
				<div class="container">
					<div class="row">
						<?php if ($this->countModules('position-4', true)) : ?>
						<div class="col-sm-6 col-md-6 col-lg-6">
							<jdoc:include type="modules" name="position-4" style="default" />
						</div>
						<?php endif; ?>

						<?php if ($this->countModules('position-5', true)) : ?>
						<div class="col-sm-6 col-md-6 col-lg-6">
							<jdoc:include type="modules" name="position-5" style="default" />
						</div>
						<?php endif; ?>	
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if ($this->countModules('breadcrumbs', true)) : ?>
			<div id="breadcrumbs">
				<div class="container">
					<div class="row">
						<?php if ($this->countModules('breadcrumbs')) : ?>
						<div class="col-12">
							<jdoc:include type="modules" name="breadcrumbs" style="none" />
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<div id="main-body">
				<div class="container">
					<div class="row">
						<?php if ($this->countModules('sidebar-left', true)) : ?>
						<div class="grid-child container-sidebar-left col-sm-3 col-md-3 col-lg-4 col-xl-3">
							<jdoc:include type="modules" name="sidebar-left" style="default" />
						</div>
						<?php endif; ?>

						<div class="grid-child container-component col-sm-9 col-md-9 col-lg-8 col-xl-9">
							<jdoc:include type="modules" name="main-top" style="default" />
							<jdoc:include type="message" />					
							<main>
							<jdoc:include type="component" />
							</main>
							<jdoc:include type="modules" name="main-bottom" style="default" />
						</div>

						<?php if ($this->countModules('sidebar-right', true)) : ?>
						<div class="grid-child container-sidebar-right col-sm-3 col-md-3 col-lg-4 col-xl-3">
							<jdoc:include type="modules" name="sidebar-right" style="default" />
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			
			<?php if ($this->countModules('position-6', true)) : ?>
			<div id="section3">
				<div class="container">
					<div class="row">				
						<div class="col-sm-12 col-md-12 col-lg-12">
							<jdoc:include type="modules" name="position-6" style="default" />
						</div>				
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if ($this->countModules('position-7', true) || $this->countModules('position-8', true)) : ?>
			<div id="section4">
				<div class="container">
					<div class="row">
						<?php if ($this->countModules('position-7', true)) : ?>
						<div class="col-sm-9 col-md-9 col-lg-9">
							<jdoc:include type="modules" name="position-7" style="default" />
						</div>
						<?php endif; ?>
						
						<?php if ($this->countModules('position-8', true)) : ?>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<jdoc:include type="modules" name="position-8" style="default" />
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
				
			<?php if ($this->countModules('position-9', true)) : ?>
			<div id="section5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<jdoc:include type="modules" name="position-9" style="default" />
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<div id="bottom">		
				<div class="bottom-top">
					<div class="container">
						<div class="row">
							<?php if ($this->countModules('bottom-1', true)) : ?>
							<div class="col-sm-4 col-md-6 col-lg-4">
								<jdoc:include type="modules" name="bottom-1" style="default" />
							</div>
							<?php endif; ?>
							
							<?php if ($this->countModules('bottom-2', true)) : ?>
							<div class="col-sm-4 hidden-sm col-md-6 col-lg-4">
								<jdoc:include type="modules" name="bottom-2" style="default" />
							</div>
							<?php endif; ?>
							
							<?php if ($this->countModules('bottom-3', true)) : ?>
							<div class="col-sm-4 col-md-6 col-lg-4">
								<jdoc:include type="modules" name="bottom-3" style="default" />
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>		
				<div class="bottom-bot">
					<div class="container">
						<div class="row">
							<?php if ($this->countModules('bottom-4', true)) : ?>
							<div class="col-sm-4 col-md-6 col-lg-4">
								<jdoc:include type="modules" name="bottom-4" style="default" />
							</div>
							<?php endif; ?>
							
							<?php if ($this->countModules('bottom-5', true)) : ?>
							<div class="col-sm-4 hidden-md col-md-6 col-lg-4">
								<jdoc:include type="modules" name="bottom-5" style="default" />
							</div>
							<?php endif; ?>
							
							<?php if ($this->countModules('bottom-6', true)) : ?>
							<div class="col-sm-4 hidden-sm col-md-6 col-lg-4">
								<jdoc:include type="modules" name="bottom-6" style="default" />
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>	
			
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-5 col-lg-6">
							<?php 
								if ($this->params->get('siteCopyright')){
									echo "<p>".htmlspecialchars($this->params->get('siteCopyright'), ENT_COMPAT, 'UTF-8')." All Rights Reserved by <a href='https://www.smartaddons.com/joomla-templates' target='_blank'>SmartAddons.Com</a></p>";							
								}
							?>
							<!--jdoc:include type="modules" name="footer1" style="none" /-->
						</div>
						<div class="col-sm-6 col-md-7 col-lg-6">
							<jdoc:include type="modules" name="footer2" style="none" />
						</div>				
					</div>
				</div>
			</footer>	
		</div>
	</div>	
	
	<?php if ($this->params->get('backTop') == 1) : ?>
	<a href="#top" id="back-top" class="back-top">
		<span class="fas fa-arrow-up" aria-hidden="true"></span>
		<span class="sr-only"><?php echo Text::_('TPL_BACKTOTOP'); ?></span>
	</a>
	<?php endif; ?>

	<jdoc:include type="modules" name="debug" style="none" />

</body>
</html>
