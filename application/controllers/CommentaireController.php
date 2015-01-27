<?php

class CommentaireController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function ajouterAction()
    {
        $this->_helper->layout->disableLayout();
	$this->_helper->viewRenderer->setNoRender(true);

        $data = array(
            'idArticle'=>  $this->getRequest()->getParam("idArticle"),
            'commentaire'=> $this->getRequest()->getParam("comment")
        );

        $commentaire = new Application_Model_DbTable_Commentaires();
        $id = $commentaire->insert($data);
        echo $id;
    }


}



