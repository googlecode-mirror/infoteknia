<?php use_helper('Javascript') ?>

    <div id="banner">

        <?php echo javascript_tag("
    AC_FL_RunContent(
        'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0',
        'width', '550',
        'height', '170',
        'src', '/infoteknia/images/banner',
        'quality', 'high',
        'pluginspage', 'http://www.adobe.com/go/getflashplayer_es',
        'align', 'middle',
        'play', 'true',
        'loop', 'true',
        'scale', 'showall',
        'wmode', 'window',
        'devicefont', 'false',
        'id', 'banner',
        'bgcolor', '#ffffff',
        'name', 'banner',
        'menu', 'true',
        'allowFullScreen', 'false',
        'allowScriptAccess','sameDomain',
        'movie', '/infoteknia/images/banner',
        'salign', ''
        ); //end AC code
") ?>

        <noscript>
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="550" height="170" id="banner" align="middle">
                <param name="allowScriptAccess" value="sameDomain" />
                <param name="allowFullScreen" value="false" />
                <param name="movie" value="/infoteknia/images/banner.swf" />
                <param name="quality" value="high" />
                <param name="bgcolor" value="#ffffff" />
                <embed src="/infoteknia/images/banner.swf" quality="high" bgcolor="#ffffff" width="550" height="170" name="banner" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_es" />
            </object>
        </noscript>
    </div>
</div>
</div>

<div id="bodymiddlePan">
    <br /><br />
    <p>Somos una empresa con mas de 10 a&ntilde;os de experiencia en servicios tecnol&oacute;gicos.</p>
    <p>Y con una permanente investigaci&oacute;n en <span>seguridad y control.</span></p>
    <br /><br />
</div>
<div id="bodyBottomPan">
  <div id="infoPan">
    <h2>Seguridad</h2>
    <p>Vigilancia a traves de video las 24 hs.</p>
    <p class="view"><?php echo link_to('ver m&aacute;s', 'contenido/seguridadycontrol') ?></p>
  </div>
  <div id="servicesPan">
    <h2>Tecnolog&iacute;a</h2>
    <p>C&aacute;maras, mp3, mp5, notebooks, PC y m&aacute;s</p>
    <p class="view"><?php echo link_to('ver m&aacute;s', 'contenido/tecnologia') ?></p>
  </div>
  <div id="schedulePan">
    <h2>Control</h2>
    <p>Control de acceso mediante huella dactilar</p>
    <p class="view"><?php echo link_to('ver m&aacute;s', 'contenido/controldeacceso') ?></p>
  </div>
</div>
