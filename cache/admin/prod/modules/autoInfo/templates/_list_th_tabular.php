  <th id="sf_admin_list_th_id">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/info/sort') == 'id'): ?>
      <?php echo link_to(__('Id'), 'info/list?sort=id&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/info/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/info/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Id'), 'info/list?sort=id&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_principal">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/info/sort') == 'principal'): ?>
      <?php echo link_to(__('Principal'), 'info/list?sort=principal&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/info/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/info/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Principal'), 'info/list?sort=principal&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_secundario">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/info/sort') == 'secundario'): ?>
      <?php echo link_to(__('Secundario'), 'info/list?sort=secundario&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/info/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/info/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Secundario'), 'info/list?sort=secundario&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_archivo">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/info/sort') == 'archivo'): ?>
      <?php echo link_to(__('Archivo'), 'info/list?sort=archivo&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/info/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/info/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Archivo'), 'info/list?sort=archivo&type=asc') ?>
      <?php endif; ?>
          </th>
