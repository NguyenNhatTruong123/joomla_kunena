<?php
/*
 * ------------------------------------------------------------------------
 * Copyright (C) 2009 - 2013 The YouTech JSC. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: The YouTech JSC
 * Websites: http://www.smartaddons.com - http://www.cmsportal.net
 * ------------------------------------------------------------------------
*/
// no direct access
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
//JHtml::_('behavior.tooltip');
//JHtml::_('behavior.formvalidation');
//JHtml::_('behavior.keepalive');

$user = JFactory::getUser();
$canDo = version_compare( JVERSION, '3.2.2', 'ge' ) ?  JHelperContent::getActions('com_templates'): TemplatesHelper::getActions();

use Joomla\Component\Templates\Administrator\Model\StyleModel;

use Joomla\CMS\Factory;
use Joomla\CMS\WebAsset\WebAssetManager;

// Form template
$StyleModel = new StyleModel;
$form = $StyleModel->getForm();

// Get cookie of backend tab param
$tabcookie = (isset($_COOKIE[$this->nameOfSJTemplate().'_backend_tab']) && $_COOKIE[$this->nameOfSJTemplate().'_backend_tab']!="")?$_COOKIE[$this->nameOfSJTemplate().'_backend_tab']:'overview';

?>

<div class="yt-templatebackend yt-jv<?php echo J_VERSION; ?>">
    <form action="<?php echo JRoute::_('index.php?option=com_templates&layout=edit&id='.$app->input->getInt('id')); ?>" method="post" name="adminForm" id="style-form" class="form-validate">
		
    	<div class="yt-nav-template clearfix">
			<ul class="nav nav-tabs">
				
				<li class="collapse-menu"><a href="#"><?php echo JText::_('COLLAPSE_MENU_TAB_LB');?> </a></li>
            	
				<!-- Tab: Overview -->
                <li <?php echo $tabcookie == 'overview' ? ' class="active"' : ''?>><a href="#overview_params" data-toggle="tab"><?php echo JText::_('OVERVIEW_TAB_LB');?></a></li>
                <!-- Tabs: templateDetail.xml -->
				
				<?php
				/* fieldsets of templateDetail.xml */
				$fieldSets = $form->getFieldsets('params');
				foreach ($fieldSets as $name => $fieldSet) :
					$label = !empty($fieldSet->label) ? $fieldSet->label : 'COM_TEMPLATES_'.$name.'_FIELDSET_LABEL';
				?>
					<li <?php echo ($tabcookie == $name) ? ' class="active"' : ''?>><a href="#<?php echo preg_replace( '/\s+/', ' ', $name);?>_params" data-toggle="tab"> <?php echo JText::_($label) ?></a></li>
				<?php
				endforeach;
				?>
                <!-- Tab: menu assignment-->
                <?php if ($user->authorise('core.edit', 'com_menu') && ($form->getValue('client_id') == 0)):?>
					<?php if ($canDo->get('core.edit.state')) : ?>
                            <li<?php echo $tabcookie == 'assignment' ? ' class="active"' : ''?>><a href="#assignment_params" data-toggle="tab"><?php echo JText::_('MENUS_ASSIGNMENT_TAB_LB');?></a></li>
                    <?php endif; ?>
                <?php endif;?>
            </ul>
			
			<div class="form-inline form-inline-header">
				<div class="control-group ">
					<div class="control-label">
						<?php echo $form->getLabel('title'); ?>
					</div>
					<div class="controls">
						<?php echo $form->getInput('title'); ?>
					</div>
				</div>
				<div class="control-group">
					<div class="control-label">
						<?php echo $form->getLabel('template'); ?>
					</div>
					<div class="controls">
						<?php echo $form->getInput('template'); ?>
					</div>
				</div>
				<div class="control-group">
					<div class="control-label">
						<?php echo $form->getLabel('home'); ?>
					</div>
					<div class="controls">
						<?php //echo $form->getInput('home'); ?>
					</div>
				</div>
				<div class="control-group" style="display:none">
					<?php echo $form->getInput('client_id'); ?>
					<input type="text" size="35" value="<?php echo $form->getValue('client_id') == 0 ? JText::_('JSITE') : JText::_('JADMINISTRATOR'); ?>	" class="inputbox readonly" readonly="readonly" />
				</div>
			</div>
			
            <div class="tab-content clearfix">
            	<!-- Tab content: Overview -->
                <div class="tab-pane tab-overview clearfix<?php echo $tabcookie == 'overview' ? ' active' : ''?>" id="overview_params">
                     <?php include_once 'template_overview.php'; ?>  
                </div>
				
                <!-- Tabs content: templateDetail.xml -->
                <?php
				foreach ($fieldSets as $name => $fieldSet) :
					?>
					<div class="tab-pane<?php echo ($tabcookie == $name) ? ' active' : ''?>" id="<?php echo preg_replace( '/\s+/', ' ', $name); ?>_params">
						<?php
						if (isset($fieldSet->description) && trim($fieldSet->description)) :
							echo '<div class="fieldset-desc"><span class="icon-info-2"></span>  '.(JText::_($fieldSet->description)).'</div>';
						endif;
						$i=0;
						foreach ($form->getFieldset($name) as $field) :
						
						if ($field->type == 'depend') {
							echo $field->type=='Text'?$textinput:$field->input;
						}elseif($field->type == 'YtFieldset'){							
							$i=0;
							echo $field->type=='Text'?$textinput:$field->input;
						}elseif($field->type == 'Media') {
							?>
							
							<div class="control-group row-fluid <?php echo 'row'.$i%2; ?>">
								<div class="control-label span2">
									<?php echo $field->label; ?>
								</div>
								<div class="controls span10">
									<joomla-field-media class="field-media-wrapper"
										type="image"
										base-path="'.JURI::root().'"
										root-folder="images"
										url="index.php?option=com_media&tmpl=component&asset=&author=&fieldid={field-media-id}&path="
										modal-container=".modal"
										modal-width="100%"								
										modal-height="400px"
										input=".yt-generator-attr-<?php echo $field->id; ?>"
										button-select=".button-select"
										button-clear=".button-clear"
										button-save-selected=".button-save-selected"
										preview="static"
										preview-container=".field-media-preview"
										preview-width="200"
										preview-height="200"
									>
										<div id="imageModal_<?php echo $field->id; ?>" role="dialog" tabindex="-1" class="joomla-modal modal fade" data-url="index.php?option=com_media&amp;tmpl=component&amp;asset=com_contact&amp;author=&amp;fieldid={field-media-id}&amp;path=" data-iframe="&lt;iframe class=&quot;iframe&quot; src=&quot;index.php?option=com_media&amp;amp;tmpl=component&amp;amp;asset=com_contact&amp;amp;author=&amp;amp;fieldid={field-media-id}&amp;amp;path=&quot; name=&quot;Change Image&quot; height=&quot;100%&quot; width=&quot;100%&quot;&gt;&lt;/iframe&gt;">
											<div class="modal-dialog modal-lg jviewport-width60" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h3 class="modal-title">Change Image</h3>
														<button type="button" class="close novalidate" data-dismiss="modal">&times;</button>
													</div>
													<div class="modal-body jviewport-height60">
														<iframe class="iframe" src="index.php?option=com_media&tmpl=component&asset=&author=&fieldid={field-media-id}&path=" name="Change Image" height="100%" width="100%"></iframe>
													</div>
													<div class="modal-footer" style="background-color: #fff; text-align: right; padding: 15px; border-top: 0;">
														<button class="btn btn-secondary button-save-selected">Select</button>
													</div>
												</div>
											</div>
										</div>
										<div class="field-media-preview">
											<div id="jform_images_image_intro_preview_empty" style="display:none">No image selected.</div>
											<div id="jform_images_image_intro_preview_img"><img src="" alt="Selected image." class="media-preview" style="max-width:200px;max-height:200px;"></div>
										</div>
										<div class="input-group">
											<input type="text" name="<?php echo $field->name; ?>" value="<?php echo $field->value; ?>" id="yt-generator-attr-<?php echo $field->id; ?>" class="yt-generator-attr-<?php echo $field->id; ?> yt-generator-attr yt-generator-upload-value" />
											<div class="input-group-btn yt-generator-field-actions">
												<a class="button-select btn btn-success" title="Select image source">
													<i class="fa fa-image"></i>Select media
												</a>
											</div>
											<button type="button" class="btn btn-danger button-clear" style="display: none;"><span class="icon-times" aria-hidden="true"></span><span class="visually-hidden">Clear</span></button>
										</div>
									</joomla-field-media>
								</div>						
							</div>							
							
			
							<?php 
						} else{
							if ($field->type == 'Text') {
								// add placeholder to text input
								$textinput = str_replace ('/>', ' placeholder="'.$form->getFieldAttribute($field->fieldname, 'default', '', $field->group).'"/>', $field->input);
							}
							$i++;
							?>
							<div class="control-group row-fluid <?php echo 'row'.$i%2; ?>">
								<div class="control-label span2">
									<?php echo $field->label; ?>
								</div>
								<div class="controls span10">
									<?php 
									
									echo $field->type=='Text'?$textinput:$field->input 
									
									?>
								</div>						
							</div>
                    	<?php } ?>
					<?php endforeach; ?>
					</div>
				<?php endforeach;  ?>
				
				<!-- Tab content: menu assignment-->
                <?php if ($user->authorise('core.edit', 'com_menu') && $form->getValue('client_id') == 0):?>
					<?php if ($canDo->get('core.edit.state')) : ?>
                        <div class="tab-pane clearfix<?php echo $tabcookie == 'assignment' ? ' active' : ''?>" id="assignment_params">
                            <?php include_once 'template_assignment.php'; ?>
                        </div>
                    <?php endif; ?>
                <?php endif;?>
            </div>
			
        </div>
        <input type="hidden" name="task" value="" />
		<?php echo JHtml::_('form.token'); ?>
    </form>
</div>

