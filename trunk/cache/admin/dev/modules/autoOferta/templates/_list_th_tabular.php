  <th id="sf_admin_list_th_titulo">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/oferta/sort') == 'titulo'): ?>
      <?php echo link_to(__('Titulo'), 'oferta/list?sort=titulo&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/oferta/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/oferta/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Titulo'), 'oferta/list?sort=titulo&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_descripcion">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/oferta/sort') == 'descripcion'): ?>
      <?php echo link_to(__('Descripcion'), 'oferta/list?sort=descripcion&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/oferta/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/oferta/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Descripcion'), 'oferta/list?sort=descripcion&type=asc') ?>
      <?php endif; ?>
          </th>
