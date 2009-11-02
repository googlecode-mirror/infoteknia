<?php use_helper('Form'); ?>

    <div id="banner">
        <?php echo image_tag('banner-contacto', 'alt=tecnologia') ?>
    </div>
  </div>
</div>

<div id="bodymiddlePan">
    <br /><br />
<table>
    <tr>
        <td>
    <br />
    <p><span>Tel&eacute;fonos&nbsp;</span> (0351)4877367 (0351)153578098 | (0351)155728022</p><br />
    <p><span>E-Mail:&nbsp;</span> info@infoteknia.com.ar</p><br />
    <p><span>Direcci&oacute;n:</span> Luis de Azpeitia 2144</p><br />

        </td>
        <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
            <?php echo image_tag('mapa'); ?><br />
            <?php echo link_to('Ver en google Maps', 'http://maps.google.com/maps?f=q&source=s_q&hl=es&geocode=&q=cordoba+argentina+luis+azpeitia+2144&sll=-31.409985,-64.218993&sspn=0.018753,0.038624&g=cordoba+argentina+luis+azpeitia&ie=UTF8&ll=-31.411762,-64.212964&spn=0.009376,0.019312&z=16') ?>
        </td>
    </tr>
</table>

</div>

<div id="bottomPan">
  <div id="bottomMainPan">
O puede comunicarse con nosotros a traves del siguiente formulario
<br /><br />
<?php echo form_tag('contenido/enviarformulario'); ?>
        Nombre<br /><?php echo input_tag('nombre') ?><br />
        Mail<br /><?php echo input_tag('mail') ?><br />
        Consulta<br /><?php echo textarea_tag('cosulta', '', 'size=29x4') ?><br>
        <?php echo input_hidden_tag('tipo', 'contacto') ?>
        <?php echo submit_tag('Enviar') ?>
 </form>

<br /><br />
<b>info@infoteknia.com.ar&nbsp;&nbsp;|&nbsp;&nbsp;(0351)&nbsp;487-7367</b>
  </div>
</div>