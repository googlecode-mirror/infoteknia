    <td><?php echo link_to($info->getId() ? $info->getId() : __('-'), 'info/edit?id='.$info->getId()) ?></td>
    <td><?php echo $info->getPrincipal() ?></td>
      <td><?php echo $info->getSecundario() ?></td>
      <td><?php echo $info->getArchivo() ?></td>
  