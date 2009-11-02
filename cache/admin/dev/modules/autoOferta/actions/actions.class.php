<?php

/**
 * autoOferta actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage autoOferta
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: actions.class.php 11340 2008-09-06 07:37:02Z fabien $
 */
class autoOfertaActions extends sfActions
{
  public function executeIndex($request)
  {
    return $this->forward('oferta', 'list');
  }

  public function executeList($request)
  {
    $this->processSort();

    $this->processFilters();


    // pager
    $this->pager = new sfPropelPager('Oferta', 20);
    $c = new Criteria();
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);
    $this->pager->setCriteria($c);
    $this->pager->setPage($this->getRequestParameter('page', $this->getUser()->getAttribute('page', 1, 'sf_admin/oferta')));
    $this->pager->init();
    // save page
    if ($this->getRequestParameter('page')) {
        $this->getUser()->setAttribute('page', $this->getRequestParameter('page'), 'sf_admin/oferta');
    }
  }

  public function executeCreate($request)
  {
    return $this->forward('oferta', 'edit');
  }

  public function executeSave($request)
  {
    return $this->forward('oferta', 'edit');
  }


  public function executeDeleteSelected($request)
  {
    $this->selectedItems = $this->getRequestParameter('sf_admin_batch_selection', array());

    try
    {
      foreach (OfertaPeer::retrieveByPks($this->selectedItems) as $object)
      {
        $object->delete();
      }
    }
    catch (PropelException $e)
    {
      $request->setError('delete', 'Could not delete the selected Ofertas. Make sure they do not have any associated items.');
      return $this->forward('oferta', 'list');
    }

    return $this->redirect('oferta/list');
  }

  public function executeEdit($request)
  {
    $this->oferta = $this->getOfertaOrCreate();

    if ($request->isMethod('post'))
    {
      $this->updateOfertaFromRequest();

      try
      {
        $this->saveOferta($this->oferta);
      }
      catch (PropelException $e)
      {
        $request->setError('edit', 'Could not save the edited Ofertas.');
        return $this->forward('oferta', 'list');
      }

      $this->getUser()->setFlash('notice', 'Your modifications have been saved');

      if ($this->getRequestParameter('save_and_add'))
      {
        return $this->redirect('oferta/create');
      }
      else if ($this->getRequestParameter('save_and_list'))
      {
        return $this->redirect('oferta/list');
      }
      else
      {
        return $this->redirect('oferta/edit?id='.$this->oferta->getId());
      }
    }
    else
    {
      $this->labels = $this->getLabels();
    }
  }

  public function executeDelete($request)
  {
    $this->oferta = OfertaPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->oferta);

    try
    {
      $this->deleteOferta($this->oferta);
    }
    catch (PropelException $e)
    {
      $request->setError('delete', 'Could not delete the selected Oferta. Make sure it does not have any associated items.');
      return $this->forward('oferta', 'list');
    }

      $currentFile = sfConfig::get('sf_upload_dir')."//".$this->oferta->getImagen();
      if (is_file($currentFile))
      {
        unlink($currentFile);
      }

    return $this->redirect('oferta/list');
  }

  public function handleErrorEdit()
  {
    $this->preExecute();
    $this->oferta = $this->getOfertaOrCreate();
    $this->updateOfertaFromRequest();

    $this->labels = $this->getLabels();

    return sfView::SUCCESS;
  }

  protected function saveOferta($oferta)
  {
    $oferta->save();

  }

  protected function deleteOferta($oferta)
  {
    $oferta->delete();
  }

  protected function updateOfertaFromRequest()
  {
    $oferta = $this->getRequestParameter('oferta');

    if (isset($oferta['titulo']))
    {
      $this->oferta->setTitulo($oferta['titulo']);
    }
    if (isset($oferta['descripcion']))
    {
      $this->oferta->setDescripcion($oferta['descripcion']);
    }
    if (isset($oferta['precio']))
    {
      $this->oferta->setPrecio($oferta['precio']);
    }
    $currentFile = sfConfig::get('sf_upload_dir')."//".$this->oferta->getImagen();
    if (!$this->getRequest()->hasErrors() && isset($oferta['imagen_remove']))
    {
      $this->oferta->setImagen('');
      if (is_file($currentFile))
      {
        unlink($currentFile);
      }
    }

    if (!$this->getRequest()->hasErrors() && $this->getRequest()->getFileSize('oferta[imagen]'))
    {
      $fileName = md5($this->getRequest()->getFileName('oferta[imagen]').time().rand(0, 99999));
      $ext = $this->getRequest()->getFileExtension('oferta[imagen]');
      if (is_file($currentFile))
      {
        unlink($currentFile);
      }
      $this->getRequest()->moveFile('oferta[imagen]', sfConfig::get('sf_upload_dir')."//".$fileName.$ext);
      $this->oferta->setImagen($fileName.$ext);
    }
  }

  protected function getOfertaOrCreate($id = 'id')
  {
    if ($this->getRequestParameter($id) === ''
     || $this->getRequestParameter($id) === null)
    {
      $oferta = new Oferta();
    }
    else
    {
      $oferta = OfertaPeer::retrieveByPk($this->getRequestParameter($id));

      $this->forward404Unless($oferta);
    }

    return $oferta;
  }

  protected function processFilters()
  {
  }

  protected function processSort()
  {
    if ($this->getRequestParameter('sort'))
    {
      $this->getUser()->setAttribute('sort', $this->getRequestParameter('sort'), 'sf_admin/oferta/sort');
      $this->getUser()->setAttribute('type', $this->getRequestParameter('type', 'asc'), 'sf_admin/oferta/sort');
    }

    if (!$this->getUser()->getAttribute('sort', null, 'sf_admin/oferta/sort'))
    {
    }
  }

  protected function addFiltersCriteria($c)
  {
  }

  protected function addSortCriteria($c)
  {
    if ($sort_column = $this->getUser()->getAttribute('sort', null, 'sf_admin/oferta/sort'))
    {
      // camelize lower case to be able to compare with BasePeer::TYPE_PHPNAME translate field name
      $sort_column = OfertaPeer::translateFieldName(sfInflector::camelize(strtolower($sort_column)), BasePeer::TYPE_PHPNAME, BasePeer::TYPE_COLNAME);
      if ($this->getUser()->getAttribute('type', null, 'sf_admin/oferta/sort') == 'asc')
      {
        $c->addAscendingOrderByColumn($sort_column);
      }
      else
      {
        $c->addDescendingOrderByColumn($sort_column);
      }
    }
  }

  protected function getLabels()
  {
    return array(
      'oferta{id}' => 'Id:',
      'oferta{titulo}' => 'Titulo:',
      'oferta{descripcion}' => 'Descripcion:',
      'oferta{precio}' => 'Precio:',
      'oferta{imagen}' => 'Imagen:',
    );
  }
}
