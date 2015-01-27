<?php

class Application_Model_DbTable_Categories extends Zend_Db_Table_Abstract
{

    protected $_name = 'categories';
    protected $_primary = 'idCat';

    protected $_dependentTables = array('Articles');

}

