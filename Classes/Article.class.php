<?php

//classe des different article (contenu) d'une pages
class Article {

    private $name;
    private $path;
    private $content;
    private $date;

    //constructor
    function __construct($article) {
        if (!empty($article))
            $this->affecteArticle($article);
    }

    //fonction de creation
    function affecteArticle($article) {
        foreach ($article as $col => $value) {
            switch ($col) {
                case 'article_content':
                    $this->setContent($value);
                    break;
                case 'article_path':
                    $this->setPath($value);
                    break;
                case 'article_date':
                    $this->setDate($value);
                    break;
                case 'article_name':
                    $this->setName($value);
                    break;
                default:
                    break;
            }
        }
    }

    //getters
    public function getContent(){
      return $this->content;
    }

    public function getPath(){
      return $this->path;
    }

    public function getDate(){
      return $this->date;
    }

    public function getName(){
      return $this->name;
    }

    //setters

    public function setContent($content){
      $this->content = $content;
    }

    public function setPath($path){
      $this->path = $path;
    }

    public function setDate($date){
      $this->date = $date;
    }

    public function setName($name){
      $this->name = $name;
    }

}

