<?php use_helper('Form'); ?>

<?php echo javascript_include_tag('jquery-1.3.2.min.js') ?>
<?php echo javascript_include_tag('jquery.easing.1.2.js') ?>
<?php echo javascript_include_tag('jquery.galleryview-1.0.1.js') ?>
<?php echo javascript_include_tag('jquery.timers-1.1.2.js') ?>

<?php use_helper('Javascript') ?>

        <?php echo javascript_tag("
    $(document).ready(function(){
        $('#photos').galleryView({
            panel_width: 290,
            panel_height: 250,
            frame_width: 40,
            frame_height: 40,
            transition_interval: 2000,
            transition_speed: 600,
            show_captions: false,
            background_color: '#ccc',
            border: '2px solid #ccc'
        });
    });
") ?>

    <div id="banner">
        <?php echo image_tag('banner-seguridad', 'alt=seguridad y tecnologia') ?>
    </div>
  </div>
</div>

<div id="bodymiddlePan">
    <br /><br />
<table>
    <tr>
        <td>
            <?php echo $info->getPrincipal(); ?>
        </td>
        <td>
            &nbsp;&nbsp;&nbsp;
        </td>
        <td>
<div id="photos" class="galleryview">
  <div class="panel">
    <?php echo image_tag('control/01.jpg') ?>
  </div>
  <div class="panel">
    <?php echo image_tag('control/02.jpg') ?>
  </div>
  <div class="panel">
    <?php echo image_tag('control/03.jpg') ?>
  </div>
  <div class="panel">
    <?php echo image_tag('control/04.jpg') ?>
  </div>
  <div class="panel">
    <?php echo image_tag('control/05.jpg') ?>
  </div>
  <div class="panel">
    <?php echo image_tag('control/06.jpg') ?>
  </div>

  <ul class="filmstrip">
    <li><?php echo image_tag('control/01.jpg', 'size=40x40') ?></li>
    <li><?php echo image_tag('control/02.jpg', 'size=40x40') ?></li>
    <li><?php echo image_tag('control/03.jpg', 'size=40x40') ?></li>
    <li><?php echo image_tag('control/04.jpg', 'size=40x40') ?></li>
    <li><?php echo image_tag('control/05.jpg', 'size=40x40') ?></li>
    <li><?php echo image_tag('control/06.jpg', 'size=40x40') ?></li>
  </ul>
</div>
        </td>
    </tr>
</table>
    <?php echo $info->getSecundario(); ?>
</div>
<div id="bottomPan">
  <div id="bottomMainPan">
Ingrese su nombre y mail para recibir m&aacute;s informaci&oacute;n sobre Control de Acceso
<br /><br />
<?php echo form_tag('contenido/enviarformulario'); ?>
        Nombre<br /><?php echo input_tag('nombre') ?><br />
        Mail<br /><?php echo input_tag('mail') ?><br />
        <?php echo input_hidden_tag('tipo', 'controldeacceso') ?>
        <?php echo submit_tag('Enviar') ?>
 </form>
<br /><br />
<b>info@infoteknia.com.ar&nbsp;&nbsp;|&nbsp;&nbsp;(0351)&nbsp;487-7367</b>
  </div>
</div>