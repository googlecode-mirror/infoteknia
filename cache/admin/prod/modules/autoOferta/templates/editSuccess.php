<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Editando: %%titulo%%', 
array('%%titulo%%' => $oferta->getTitulo())) ?></h1>

<div id="sf_admin_header">
<?php include_partial('oferta/edit_header', array('oferta' => $oferta)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('oferta/edit_messages', array('oferta' => $oferta, 'labels' => $labels)) ?>
<?php include_partial('oferta/edit_form', array('oferta' => $oferta, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('oferta/edit_footer', array('oferta' => $oferta)) ?>
</div>

</div>
