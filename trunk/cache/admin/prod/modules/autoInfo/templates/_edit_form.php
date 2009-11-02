<?php echo form_tag('info/save', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($info, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('info[principal]', __($labels['info{principal}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('info{principal}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('info{principal}')): ?>
    <?php echo form_error('info{principal}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_textarea_tag($info, 'getPrincipal', array (
  'size' => '30x3',
  'control_name' => 'info[principal]',
  'rich' => true,
  'tinymce_options' => 'height:200, width:650, language:\'es\', theme_advanced_buttons1:\'bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,undo,redo,|,cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,link,unlink\', theme_advanced_buttons2:\'\'',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('info[secundario]', __($labels['info{secundario}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('info{secundario}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('info{secundario}')): ?>
    <?php echo form_error('info{secundario}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_textarea_tag($info, 'getSecundario', array (
  'size' => '30x3',
  'control_name' => 'info[secundario]',
  'rich' => true,
  'tinymce_options' => 'height:200, width:650, language:\'es\', theme_advanced_buttons1:\'bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,undo,redo,|,cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,link,unlink\', theme_advanced_buttons2:\'\'',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('info[archivo]', __($labels['info{archivo}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('info{archivo}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('info{archivo}')): ?>
    <?php echo form_error('info{archivo}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($info, 'getArchivo', array (
  'size' => 80,
  'control_name' => 'info[archivo]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('info' => $info)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($info->getId()): ?>
<?php echo button_to(__('delete'), 'info/delete?id='.$info->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
