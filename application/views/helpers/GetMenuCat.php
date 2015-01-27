<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Zend_View_Helper_GetMenuCat extends Zend_View_Helper_Abstract
{
    public function getMenuCat(){
        $cat = new Application_Model_DbTable_Categories();
        return $cat->fetchAll()->toArray();
    }
}
?>
