<?php

class Application_Model_Articles
{
    protected $_idArticle;
    protected $_titreArticle;
    protected $_contenuArticle;
    protected $_dateArticle;

    public function __set($name, $value){}
    public function __get($name){}

    public function setComment($text){}
    public function getComment(){}

    public function setEmail($email){}
    public function getEmail(){}

    public function setCreated($ts){}
    public function getCreated(){}

    public function setId($id){}
    public function getId(){}
}

class Application_Model_ArticlesMapper
{
    public function save(Application_Model_Articles $article){}
    public function find($id){}
    public function fetchAll(){}
}
