<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   (C) 2019 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * html5 (chosen html5 tag and font header tags)
 */

defined('_JEXEC') or die;

use Joomla\Utilities\ArrayHelper;

$module  = $displayData['module'];
$params  = $displayData['params'];
$attribs = $displayData['attribs'];

if ((string) $module->content === '')
{
	return;
}

$moduleTag              = htmlspecialchars($params->get('module_tag', 'div'), ENT_QUOTES, 'UTF-8');
$moduleAttribs          = [];
$moduleAttribs['class'] = htmlspecialchars($params->get('moduleclass_sfx'), ENT_QUOTES, 'UTF-8');
$bootstrapSize          = (int) $params->get('bootstrap_size', 0);
$moduleAttribs['class'] .= $bootstrapSize !== 0 ? ' col-md-' . $bootstrapSize : '';
$headerTag              = htmlspecialchars($params->get('header_tag', 'h3'), ENT_QUOTES, 'UTF-8');
$headerClass            = htmlspecialchars($params->get('header_class', ''), ENT_QUOTES, 'UTF-8');
$headerAttribs          = [];

// Only output a header class if one is set
if ($headerClass !== '')
{
	$headerAttribs['class'] = $headerClass;
}

// Only add aria if the moduleTag is not a div
if ($moduleTag !== 'div')
{
	if ($module->showtitle) :
		$moduleAttribs['aria-labelledby'] = 'mod-' . $module->id;
		$headerAttribs['id']              = 'mod-' . $module->id;
	else:
		$moduleAttribs['aria-label'] = $module->title;
	endif;
}

$header = '<' . $headerTag . ' ' . ArrayHelper::toString($headerAttribs) . '>' . $module->title . '</' . $headerTag . '>';
?>

<?php
	$badge = preg_match ('/badge/', $moduleAttribs['class']) ? "<span class=\"badge\"></span>\n" : "";
	$scrollreveal = $headerClass;
	
	/*$icons = '';
	if(strpos($moduleAttribs['class'], 'fa')===false){
       $modclass_sfx = $moduleAttribs['class'];
    }else{
        $modclass_sfx = explode("fa-", $moduleAttribs['class']);
        $icons = "<i class='fa fa-".trim($modclass_sfx[1])."'></i>";
        $modclass_sfx = "style-icon ".trim($modclass_sfx[0]);
    }*/
	?>
	
	<<?php echo $moduleTag ?> class="module  <?php echo htmlspecialchars($params->get('moduleclass_sfx'), ENT_QUOTES, 'UTF-8');//echo $modclass_sfx ?> clearfix" <?php echo ($scrollreveal !='')?  'data-scroll-reveal="'. $scrollreveal.'"' : '' ; ?>>
	    <?php if ((bool) $module->showtitle) : ?>
		    <<?php echo $headerTag ?> class="modtitle"><?php //echo $icons; ?><?php echo $module->title; ?><?php echo $badge; ?></<?php echo $headerTag ?>>
			
	    <?php endif; ?>
	    <div class="modcontent clearfix">
			<?php echo $module->content; ?>
	    </div>
	</<?php echo $moduleTag ?>>

