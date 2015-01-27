<?php

class CatController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function __call($v, $k){
       $this->_forward('/cat/index/val/'.$v);
        //exit();
    }


    public function indexAction()
    {
        // action body
    }


}

