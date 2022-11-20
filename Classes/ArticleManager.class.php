<?php
//classe qui gere les articles
class ArticleManager{

    private $fileManager;

    //construtor
    function __construct(){
        $this->fileManager = new FileManager();
    }

    //get un articles avec le path du fichier
    function getArticle($path){
      if (is_file($path))
      {
        //scan du fichier
        $element  = basename($path);
        $article = $this->createArticle($element,$path);
        //$this->getContenu($article);
        return $article;
      }
    }

    //creer un article avec le nom fichier et le path du fichier
    function createArticle($element,$path){
        //création d'une page
        $article_name = $element;
        //date de creation et de modification de la page
        $article_date = date ("d/m/Y : H:i:s.", filectime($path));
        //tableau parametres de la page
        $article_param = array('article_name' => $article_name,
                            'article_path'=>$path,
                            'article_date'=>$article_date);
        //creation de l'objet page
        $article = new Article($article_param);
        return $article;
      }

      //get le contenu d'un article
    function getContenu($article){
        $path = $article->getPath();
        if (is_file($path))
        {
            //contenu de l'article
            $contenu = $this->fileManager->getFileContent($path);
            $article->setContent($contenu);
        }

    }

    
    //afficher le contenu d'un article
    function AfficherContenu($article){
	    $path = $article->getPath();
	    $this->fileManager->AfficheFileContent($path);
    }

    function ModiferArticle($article,$newContent){
        $path = $article->getPath();
        $this->fileManager->ModifierFileContent($path,$newContent);
    }

}
