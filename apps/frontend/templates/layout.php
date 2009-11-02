<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php echo javascript_include_tag('flash') ?>
</head>

<body>
    <div id="header_container">
    <div id="header">
        <a href="#">
            <?php echo image_tag('logo.gif', 'alt=Infoteknia title=Infoteknia border=0') ?>
        </a>
        <ul class="menu">
            <li >
                <?php echo link_to('Principal', 'contenido/index') ?>
            </li>
            <li >
                <?php echo link_to('Seguridad y control', 'contenido/seguridadycontrol') ?>
            </li>
            <li >
                <?php echo link_to('Tecnolog&iacute;a', 'contenido/tecnologia') ?>
            </li>
            <li >
                <?php echo link_to('Control de acceso', 'contenido/controldeacceso') ?>
            </li>
            <li class="contact">
                <?php echo link_to('Contacto', 'contenido/contacto') ?>
            </li>
        </ul>

    <?php echo $sf_content ?>

    <div id="footermainPan">
        <div id="footerPan">
           <ul>
                <li >
                    <?php echo link_to('Principal', 'contenido/index') ?>|
               </li>
                <li >
                    <?php echo link_to('seguridad y control', 'contenido/seguridadycontrol') ?>|
             </li>
                <li >
                    <?php echo link_to('Tecnolog&iacute;a', 'contenido/tecnologia') ?>|
               </li>
                <li >
                    <?php echo link_to('Control de acceso', 'contenido/controldeacceso') ?>|
                </li>
                <li class="contact">
                    <?php echo link_to('Contacto', 'contenido/contacto') ?>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>