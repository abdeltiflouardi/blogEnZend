<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view   ->doctype('XHTML1_STRICT');
        $view   ->setEncoding('UTF-8')
                ->addHelperPath("ZendX/JQuery/View/Helper", "ZendX_JQuery_View_Helper")
                ->addHelperPath("Zend/View/Helper", "Zend_View_Helper")
                ->setEscape('utf8_encode');
    }

    protected function _initDefineVars(){
        define('NOMBRE_ARTICLE_PAR_PAGE', 2);
        define('PAGE_RANGE_PAGINATOR', 5);
    }

    protected function _initRouter(){
        $front = Zend_Controller_Front::getInstance();
        $router = $front->getRouter();
        
        //$router->addRoute('page',
        //  new Zend_Controller_Router_Route('page/:page',
        //  array('controller' => 'article', 'action' => 'liste')));

            $page = new Zend_Controller_Router_Route_Regex(
                    'page-([a-z0-9-]+).html',
                    array(
                                            'controller'=>'article',
                                            'action'=>'liste'
                                    ),
                                array(
                                    1 => 'page'
                                ),
                              'page-%s.html'
            );

            $cat = new Zend_Controller_Router_Route_Regex(
                    'cat-([a-z0-9-]+)-(\d+)-page-(\d+).html',
                    array(
                                            1=>null,
                                            2=>1,
                                            3=>1,
                                            'controller'=>'article',
                                            'action'=>'liste'
                                    ),
                                array(
                                    1   => 'libelleCat',
                                    2   => 'idCat',
                                    3   =>  'page',
                                ),
                              'cat-%s-%d-page-%d.html'
            );

            $details = new Zend_Controller_Router_Route_Regex(
                    '(\d+)-([a-z0-9-]+)',
                    array(
                                            1=>1,
                                            2=>null,
                                            'controller'=>'article',
                                            'action'=>'details'
                                    ),
                                array(
                                    1   => 'idArticle',
                                    2   => 'titleArticle'
                                ),
                              '%d-%s'
            );

            $router->addRoute('details', $details);
            $router->addRoute('page', $page);
            $router->addRoute('cat', $cat);
    }
}

