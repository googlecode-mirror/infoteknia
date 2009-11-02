<td colspan="2">
    <?php echo link_to($oferta->getTitulo() ? $oferta->getTitulo() : __('-'), 'oferta/edit?id='.$oferta->getId()) ?>
     - 
    <?php echo $oferta->getDescripcion() ?>
     - 
</td>