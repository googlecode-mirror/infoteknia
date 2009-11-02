<?php

/**
 * contenido actions.
 *
 * @package    infoteknia
 * @subpackage contenido
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class contenidoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->msg = "hola";
  }

    public function executeSeguridadycontrol(sfWebRequest $request)
  {
    $this->info = InfoPeer::retrieveByPk(1);
  }

  public function executeTecnologia(sfWebRequest $request)
  {
    $c = new Criteria();
    $this->ofertas = OfertaPeer::doSelect($c);
  }

  public function executeControldeacceso(sfWebRequest $request)
  {
    $this->info = InfoPeer::retrieveByPk(2);
  }

  public function executeContacto(sfWebRequest $request)
  {
    $this->info = "hola";
  }

    public function executeEnviarformulario($request)
  {
    $tipoFormulario = $request->getParameter('tipo');
    if (tipoFormulario == 'consulta'){
        $cuerpo_mail = "Nuevo mensaje en Infoteknia.com.ar \n";
        $cuerpo_mail .= "Nombre: " . $request->getParameter('nombre') . "\n";
        $cuerpo_mail .= "E-Mail: " . $request->getParameter('email') . "\n";
        $cuerpo_mail .= "Consulta: " . $request->getParameter('consulta') . "\n\n";
            //mando el correo...
        mail("mmarciotte@gmail.com","Nueva Consulta en Infoteknia.com.ar",$cuerpo_mail);


        $this->mensaje = "<div align=\"center\"><br><font class=\"titulo\">Gracias por rellenar el formulario. Se ha enviado correctamente.</font><br><br></div>";
    }
    else{
        $nombre = $request->getParameter('nombre');
        $mail = $request->getParameter('mail');

//$conexion = Propel::getConnection();
//$consulta = 'INSERT INTO  VALUES($nombre,$mail)';
//$sentencia = $conexion->prepare($consulta);
//$sentencia->execute();

    }
  }

}
