<?php

//ContenuLoader permet de charger les pages et articles
class ContenuLoader {

    private $pageManager;
    private $articleManager;

  function __construct() {
      $this->pageManager = new PageManager();
      $this->articleManager = new ArticleManager();
    }

   function Load($dir) {

     //Categorie pour la construction des differente page
   	$contenu = array();

   	//Lecture du repertoire en parametre
   	if ($handle = opendir($dir))
    {
      //Le dossier existe
   		while ($element = readdir($handle))
      {
         $path = $dir == '.' ? $element : $dir . '/' . $element;

   			if ( $element != "." && $element != ".." && is_file($path) == false)
        {
          //c'est un dossier
          //$page = $this->pageManager->createPage($element,$path);
          //var_dump($page->getName());
           $this->pageManager->getPage($path);

   			} else if (is_file($path)) {
          //c'est un fichier
        }

   		}
   		closedir($handle);

   	}
  }
  function LoadContenuPage($page) {

    //Categorie pour la construction des differente page
    $pages = array();
    $articles = array();
    $dir = $page->getPath();

    //Lecture du repertoire en parametre
    if ($handle = opendir($dir))
   {
     //Le dossier existe

      while ($element = readdir($handle))
     {
        $path = $dir == '.' ? $element : $dir . '/' . $element;

      if ( $element != "." && $element != ".." && is_file($path) == false)
       {
         //c'est un dossier
         $page = $this->pageManager->createPage($element,$path);
         array_push($pages, $page);

        } else if (is_file($path)) {
         //c'est un fichier
          array_push($articles, $element);
       }

      }
      closedir($handle);
      var_dump($pages);
      var_dump($articles);
    }


  }
}
