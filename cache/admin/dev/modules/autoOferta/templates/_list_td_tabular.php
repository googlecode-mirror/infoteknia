    <td><?php echo link_to($oferta->getTitulo() ? $oferta->getTitulo() : __('-'), 'oferta/edit?id='.$oferta->getId()) ?></td>
    <td><?php echo $oferta->getDescripcion() ?></td>
  