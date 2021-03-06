<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Editando  textos de las secciones', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('info/edit_header', array('info' => $info)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('info/edit_messages', array('info' => $info, 'labels' => $labels)) ?>
<?php include_partial('info/edit_form', array('info' => $info, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('info/edit_footer', array('info' => $info)) ?>
</div>

</div>
