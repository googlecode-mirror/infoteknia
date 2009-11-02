<td colspan="4">
    <?php echo link_to($info->getId() ? $info->getId() : __('-'), 'info/edit?id='.$info->getId()) ?>
     - 
    <?php echo $info->getPrincipal() ?>
     - 
    <?php echo $info->getSecundario() ?>
     - 
    <?php echo $info->getArchivo() ?>
     - 
</td>