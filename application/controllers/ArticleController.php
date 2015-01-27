<?php

class ArticleController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function listeAction()
    {
                $criteres = array();

                if($this->getRequest()->has('idCat'))
                    $criteres['where'] = 'idCat='.$this->getRequest()->getParam('idCat');

                $criteres['limit'] = array($this->_getParam('page', 1),NOMBRE_ARTICLE_PAR_PAGE);
                $criteres['order'] = "idArticle asc";
                $this->view->list = Application_Model_DbTable_Articles::getListeArticles($criteres, $artSelect);
        
                if($this->_hasParam("idCat")):
                    $this->view->route = 'cat';
                else:
                    $this->view->route = 'page';
                endif;
                $adapter = new Zend_Paginator_Adapter_DbSelect($artSelect);
                $page = new Zend_Paginator($adapter);
                $page->setPageRange(PAGE_RANGE_PAGINATOR);
                $page->setCurrentPageNumber($this->_getParam('page', 1));
                $page->setItemCountPerPage($this->_getParam('par', NOMBRE_ARTICLE_PAR_PAGE));
                $this->view->paginator = $page;
    }

    public function detailsAction()
    {
        $art = new Application_Model_DbTable_Articles();
        $this->view->article = $art->find($this->getRequest()->getParam('idArticle'))->current();
    }


}





