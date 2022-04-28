<?php
/**
 * @package Sj Mega News 
 * @version 3.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @copyright (c) 2013 YouTech Company. All Rights Reserved.
 * @author YouTech Company http://www.smartaddons.com
 *
 */
defined('_JEXEC') or die;

	$tag_id	= 'sj_meganew_'.rand().time();
	$theme = $params->get('theme','theme1');
	JHtml::stylesheet('modules/'.$module->module.'/assets/css/styles.css');
	JHtml::stylesheet('modules/'.$module->module.'/assets/css/styles-responsive.css');
	MeganewsImageHelper::setDefault($params);
	$colums = ' meganew-rps01-'.$params->get('nbm-column1').' meganew-rps02-'.$params->get('nbm-column2').' meganew-rps03-'.$params->get('nbm-column3').' meganew-rps04-'.$params->get('nbm-column4');
	$colums_theme3 = ' meganewt3-rps01-'.$params->get('nbi-column1').' meganewt3-rps02-'.$params->get('nbi-column2').' meganewt3-rps03-'.$params->get('nbi-column3').' meganewt3-rps04-'.$params->get('nbi-column4');
	$colums_theme3 = ($theme == 'theme3')?$colums_theme3:'';
?>	

<?php if ($params->get('pretext') != '' ): ?>
<div class="meganew-pretext" >
	<?php echo JText::_($params->get('pretext')); ?>
</div>
<?php 
endif;
if(!empty($list)) { ?>
<!--[if lt IE 9]><div id="<?php echo $tag_id; ?>" class="sj-meganew msie lt-ie9 "><![endif]-->
<!--[if IE 9]><div id="<?php echo $tag_id; ?>" class="sj-meganew msie  "><![endif]-->
<!--[if gt IE 9]><!--><div id="<?php echo $tag_id; ?>" class="sj-meganew "><!--<![endif]-->
		<div class="meganew-wrap mgi-wrap <?php echo $theme; ?> <?php echo $colums; ?>">
			<?php $res = 0; foreach($list as $items){ $res++; $_items = $items->child; ?>
				<div class="meganew-box mgi-box">
					<div class="magenew-box-inner">
						<div class="meganew-category mgi-cat google-font">
							<a href="<?php echo $items->link; ?>" title="<?php echo $items->title; ?>" <?php echo MegaNewsHelper::parseTarget($params->get('link_target'));  ?> >
								<?php echo $items->title; ?>
							</a>
						</div>
						<div class="meagnew-items mgi-item <?php echo $theme; ?> <?php echo $colums_theme3; ?>">
							<?php 
							//print_r($layout.'_'.$theme);
							include JModuleHelper::getLayoutPath($module->module, 'default_'.$theme); ?>
						</div>
					</div>
				</div>
				<?php 
				$clear = 'clr1';
				if ($res % 2 == 0) $clear .= ' clr2';
				if ($res % 3 == 0) $clear .= ' clr3';
				if ($res % 4 == 0) $clear .= ' clr4';
				if ($res % 5 == 0) $clear .= ' clr5';
				if ($res % 6 == 0) $clear .= ' clr6';
				?>
				<div class="<?php echo $clear; ?>"></div>   
			<?php } ?>
		</div>
	</div>
<?php } else { ?>
		<div class="no-item"><?php echo JText::_('Has no content to show!'); ?></div>
<?php } ?>
<?php if ($params->get('posttext') != '' ): ?>
<div class="meganew-posttext">
	<?php echo JText::_($params->get('posttext')); ?></div>
<?php endif; ?>	
	