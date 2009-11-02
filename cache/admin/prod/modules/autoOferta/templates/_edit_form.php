<?php echo form_tag('oferta/save', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($oferta, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('oferta[titulo]', __($labels['oferta{titulo}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('oferta{titulo}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('oferta{titulo}')): ?>
    <?php echo form_error('oferta{titulo}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($oferta, 'getTitulo', array (
  'size' => 80,
  'control_name' => 'oferta[titulo]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('oferta[descripcion]', __($labels['oferta{descripcion}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('oferta{descripcion}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('oferta{descripcion}')): ?>
    <?php echo form_error('oferta{descripcion}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_textarea_tag($oferta, 'getDescripcion', array (
  'size' => '60x8',
  'control_name' => 'oferta[descripcion]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('oferta[precio]', __($labels['oferta{precio}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('oferta{precio}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('oferta{precio}')): ?>
    <?php echo form_error('oferta{precio}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($oferta, 'getPrecio', array (
  'size' => 15,
  'control_name' => 'oferta[precio]',
)); echo $value ? $value : '&nbsp;' ?>
  <div class="sf_admin_edit_help"><?php echo __('no incluir el signo $') ?></div>  </div>
</div>

<div class="form-row">
  <?php echo label_for('oferta[imagen]', __($labels['oferta{imagen}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('oferta{imagen}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('oferta{imagen}')): ?>
    <?php echo form_error('oferta{imagen}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_admin_input_file_tag($oferta, 'getImagen', array (
  'control_name' => 'oferta[imagen]',
)); echo $value ? $value : '&nbsp;' ?>
  <div class="sf_admin_edit_help"><?php echo __('Las imagenes tienen que ser de 100x100 px') ?></div>  </div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('oferta' => $oferta)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($oferta->getId()): ?>
<?php echo button_to(__('delete'), 'oferta/delete?id='.$oferta->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
