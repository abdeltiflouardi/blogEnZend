<?php

class Application_Model_DbTable_Commentaires extends Zend_Db_Table_Abstract
{

    protected $_name = 'commentaires';
    protected $_primary = 'idCom';

    protected $_referenceMap    = array(
        'Articles' => array(
            'columns'           => array('idArticle'),
            'refTableClass'     => 'Application_Model_DbTable_Articles',
            'refColumns'        => array('idArticle')
        ));

}

