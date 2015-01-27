<?php

class Application_Model_DbTable_Articles extends Zend_Db_Table_Abstract
{

    protected $_name = 'articles';
    
    protected $_dependentTables = array('Commentaires');

    protected $_referenceMap    = array(
        'Users' => array(
            'columns'           => array('idUser'),
            'refTableClass'     => 'Application_Model_DbTable_Users',
            'refColumns'        => array('idUser')
        ),
        'Categories' => array(
            'columns'           => array('idCat'),
            'refTableClass'     => 'Application_Model_DbTable_Categories',
            'refColumns'        => array('idCat')
        ));

    public static function getListeArticles(array $criteres=array(), &$artSelect){
        $artsArray = array();
        $arts = new Application_Model_DbTable_Articles();

        if(count($criteres)!=0):
            $select = $arts->select();
            $artSelect = $select;
            foreach ($criteres as $k=>$v):
                switch ($k):
                    case 'where': is_null($v) ? '' : $select->where($v) ;break;
                    case 'order': is_null($v) ? '' : $select->order($v) ;break;
                    case 'limit': is_null($v) ? '' : $select->limitPage($v[0], $v[1]);break;
                endswitch;
            endforeach;
            $arts = $arts->fetchAll($select);
        else:
            $arts = $arts->fetchAll();
        endif;


        $i=0;
        foreach ($arts as $v):
            $i++;
            $artsArray[$i]['nomUser'] = $v->findParentApplication_Model_DbTable_Users()->nomUser;
            $artsArray[$i]['commentaire'] = $v->findDependentRowset("Application_Model_DbTable_Commentaires")->toArray();

            //var_dump($artsArray[$i]['commentaire']);

            foreach ($v->toArray() as $ks=>$vs):
                $artsArray[$i][$ks] = $vs;
            endforeach;
        endforeach;
        return $artsArray;
    }
}

