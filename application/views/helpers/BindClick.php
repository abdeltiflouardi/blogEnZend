<?php
 class Zend_View_Helper_BindClick extends Zend_View_Helper_Abstract
 {
     public function bindClick($id){
        $jquery = $this->view->jQuery();
        $jquery->enable();
        $jqHandler = ZendX_JQuery_View_Helper_JQuery::getJQueryHandler();
        $function = '("#commentaire'.$id.'").click(function() '
                  . '{ $("#comment'.$id.'").toggle(); }'
                  . ')';
        $jquery->addOnload($jqHandler . $function);

        $function = '("#envoyerCommentBtn'.$id.'").click(function() '
                  . '{ insertComment('.$id.'); }'
                  . ')';
        $jquery->addOnload($jqHandler . $function);

        return '';
     }
}