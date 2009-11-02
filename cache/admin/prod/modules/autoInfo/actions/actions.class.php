<?php

/**
 * autoInfo actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage autoInfo
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: actions.class.php 11340 2008-09-06 07:37:02Z fabien $
 */
class autoInfoActions extends sfActions
{
  public function executeIndex($request)
  {
    return $this->forward('info', 'list');
  }

  public function executeList($request)
  {
    $this->processSort();

    $this->processFilters();


    // pager
    $this->pager = new sfPropelPager('Info', 20);
    $c = new Criteria();
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);
    $this->pager->setCriteria($c);
    $this->pager->setPage($this->getRequestParameter('page', $this->getUser()->getAttribute('page', 1, 'sf_admin/info')));
    $this->pager->init();
    // save page
    if ($this->getRequestParameter('page')) {
        $this->getUser()->setAttribute('page', $this->getRequestParameter('page'), 'sf_admin/info');
    }
  }

  public function executeCreate($request)
  {
    return $this->forward('info', 'edit');
  }

  public function executeSave($request)
  {
    return $this->forward('info', 'edit');
  }


  public function executeDeleteSelected($request)
  {
    $this->selectedItems = $this->getRequestParameter('sf_admin_batch_selection', array());

    try
    {
      foreach (InfoPeer::retrieveByPks($this->selectedItems) as $object)
      {
        $object->delete();
      }
    }
    catch (PropelException $e)
    {
      $request->setError('delete', 'Could not delete the selected Infos. Make sure they do not have any associated items.');
      return $this->forward('info', 'list');
    }

    return $this->redirect('info/list');
  }

  public function executeEdit($request)
  {
    $this->info = $this->getInfoOrCreate();

    if ($request->isMethod('post'))
    {
      $this->updateInfoFromRequest();

      try
      {
        $this->saveInfo($this->info);
      }
      catch (PropelException $e)
      {
        $request->setError('edit', 'Could not save the edited Infos.');
        return $this->forward('info', 'list');
      }

      $this->getUser()->setFlash('notice', 'Your modifications have been saved');

      if ($this->getRequestParameter('save_and_add'))
      {
        return $this->redirect('info/create');
      }
      else if ($this->getRequestParameter('save_and_list'))
      {
        return $this->redirect('info/list');
      }
      else
      {
        return $this->redirect('info/edit?id='.$this->info->getId());
      }
    }
    else
    {
      $this->labels = $this->getLabels();
    }
  }

  public function executeDelete($request)
  {
    $this->info = InfoPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->info);

    try
    {
      $this->deleteInfo($this->info);
    }
    catch (PropelException $e)
    {
      $request->setError('delete', 'Could not delete the selected Info. Make sure it does not have any associated items.');
      return $this->forward('info', 'list');
    }

    return $this->redirect('info/list');
  }

  public function handleErrorEdit()
  {
    $this->preExecute();
    $this->info = $this->getInfoOrCreate();
    $this->updateInfoFromRequest();

    $this->labels = $this->getLabels();

    return sfView::SUCCESS;
  }

  protected function saveInfo($info)
  {
    $info->save();

  }

  protected function deleteInfo($info)
  {
    $info->delete();
  }

  protected function updateInfoFromRequest()
  {
    $info = $this->getRequestParameter('info');

    if (isset($info['principal']))
    {
      $this->info->setPrincipal($info['principal']);
    }
    if (isset($info['secundario']))
    {
      $this->info->setSecundario($info['secundario']);
    }
    if (isset($info['archivo']))
    {
      $this->info->setArchivo($info['archivo']);
    }
  }

  protected function getInfoOrCreate($id = 'id')
  {
    if ($this->getRequestParameter($id) === ''
     || $this->getRequestParameter($id) === null)
    {
      $info = new Info();
    }
    else
    {
      $info = InfoPeer::retrieveByPk($this->getRequestParameter($id));

      $this->forward404Unless($info);
    }

    return $info;
  }

  protected function processFilters()
  {
  }

  protected function processSort()
  {
    if ($this->getRequestParameter('sort'))
    {
      $this->getUser()->setAttribute('sort', $this->getRequestParameter('sort'), 'sf_admin/info/sort');
      $this->getUser()->setAttribute('type', $this->getRequestParameter('type', 'asc'), 'sf_admin/info/sort');
    }

    if (!$this->getUser()->getAttribute('sort', null, 'sf_admin/info/sort'))
    {
    }
  }

  protected function addFiltersCriteria($c)
  {
  }

  protected function addSortCriteria($c)
  {
    if ($sort_column = $this->getUser()->getAttribute('sort', null, 'sf_admin/info/sort'))
    {
      // camelize lower case to be able to compare with BasePeer::TYPE_PHPNAME translate field name
      $sort_column = InfoPeer::translateFieldName(sfInflector::camelize(strtolower($sort_column)), BasePeer::TYPE_PHPNAME, BasePeer::TYPE_COLNAME);
      if ($this->getUser()->getAttribute('type', null, 'sf_admin/info/sort') == 'asc')
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
      'info{id}' => 'Id:',
      'info{principal}' => 'Principal:',
      'info{secundario}' => 'Secundario:',
      'info{archivo}' => 'Archivo:',
    );
  }
}
