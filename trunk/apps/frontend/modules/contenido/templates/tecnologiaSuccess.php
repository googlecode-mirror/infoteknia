<?php use_helper('Form'); ?>

    <div id="banner">
        <?php echo image_tag('banner-tecnologia', 'alt=tecnologia') ?>
    </div>
  </div>
</div>

<div id="bodymiddlePan">
    <br /><br />
<table class="ofertas">
    <tr>
        <td>
<table>
    <tr>
        <td>
            <b><?php echo $ofertas[0]->getTitulo(); ?></b><br />
            <?php echo $ofertas[0]->getDescripcion(); ?><br />
            <font color="red">$&nbsp;<?php echo $ofertas[0]->getPrecio(); ?></font>
        </td>
        <td>
            <?php echo image_tag('/uploads/'.$ofertas[0]->getImagen(), 'size=100x100'); ?>
        </td>
    </tr>
</table>
        </td>
        <td>
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
<table>
    <tr>
        <td>
            <b><?php echo $ofertas[1]->getTitulo(); ?></b><br />
            <?php echo $ofertas[1]->getDescripcion(); ?><br />
            <font color="red">$&nbsp;<?php echo $ofertas[1]->getPrecio(); ?></font>
        </td>
        <td>
            <?php echo image_tag('/uploads/'.$ofertas[1]->getImagen(), 'size=100x100'); ?>
        </td>
    </tr>
</table>        </td>
    </tr>
<tr>
        <td>
<table>
    <tr>
        <td>
            <b><?php echo $ofertas[2]->getTitulo(); ?></b><br />
            <?php echo $ofertas[2]->getDescripcion(); ?><br />
            <font color="red">$&nbsp;<?php echo $ofertas[2]->getPrecio(); ?></font>
        </td>
        <td>
            <?php echo image_tag('/uploads/'.$ofertas[2]->getImagen(), 'size=100x100'); ?>
        </td>
    </tr>
</table>        </td>
        <td>
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
<table>
    <tr>
        <td>
            <b><?php echo $ofertas[3]->getTitulo(); ?></b><br />
            <?php echo $ofertas[3]->getDescripcion(); ?><br />
            <font color="red">$&nbsp;<?php echo $ofertas[3]->getPrecio(); ?></font>
        </td>
        <td>
            <?php echo image_tag('/uploads/'.$ofertas[3]->getImagen(), 'size=100x100'); ?>
        </td>
    </tr>
</table>        </td>
    </tr>
</table>

</div>

<div id="bottomPan">
  <div id="bottomMainPan">
Ingrese su nombre y mail para descargar la lista completa de productos
<br /><br />
<?php echo form_tag('contenido/enviarformulario'); ?>
        Nombre<br /><?php echo input_tag('nombre') ?><br />
        Mail<br /><?php echo input_tag('mail') ?><br />
        <?php echo input_hidden_tag('tipo', 'tecnologia') ?>
        <?php echo submit_tag('Enviar') ?>
 </form>
<br /><br />
<b>info@infoteknia.com.ar&nbsp;&nbsp;|&nbsp;&nbsp;(0351)&nbsp;487-7367</b>
  </div>
</div>