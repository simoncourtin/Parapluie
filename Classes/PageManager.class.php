<?php

//classe de gestion des pages
class PageManager{

    private $articleManager;

    //constructor
    function __construct(){
        $this->articleManager = new ArticleManager();
    }

    //get page avec path
    function getPage($path){

      if (is_dir($path))
      {
        //scan le dossier
        $element  = basename($path);
        $page = $this->createPage($element,$path);
        $this->getContenu($page);
        return $page;
      }

    }

    //get le contenu d'une page
    function getContenu($page){
	  //get path de la page	
      $path = $page->getPath();
	  //sous-pages
      $pages = array();
	  //articles de la pages
      $articles = array();

      if (is_dir($path))
      {
          //contenu
          $contenu =  scandir($path);
          foreach ($contenu as $c) {
             $pathContenu = $path == '.' ? $c : $path . '/' . $c;
             if(is_file($pathContenu)) {
               //c'est un fichier
              $article = $this->articleManager->getArticle($pathContenu);
              array_push($articles, $article);

            } else if($c != "." && $c != ".." && is_dir($pathContenu) && $c != "ressources" ) {
              //c'est une page
              $p =  $this->getPage($pathContenu);
              array_push($pages, $p);
            }
          }
          $page->setArticles($articles);
          $page->setPages($pages);
      }

    }

  //creation d'une page
  function createPage($element,$path){

      //création d'une page
      $page_name = $this->extractPageName($element);
      //date de creation et de modification de la page
      $page_c_date = date ("d/m/Y : H:i:s.", filectime($path));
      $page_m_date = date ("d/m/Y : H:i:s.", filemtime($path));
      //tableau parametres de la page
      $page_param = array('page_name' => $page_name,
                          'page_path'=>$path,
                          'page_articles'=>array(),
                          'page_pages'=>array(),
                          'page_create_date'=>$page_c_date,
                          'page_modify_date'=>$page_m_date);
      //creation de l'objet page
      $page = new Page($page_param);
      //$this->loader->LoadContenuPage($page);
      return $page;

    }

    //fonction de transformation du nom
    function extractPageName($string){
      //extraire la nom de la page
      //suppression des _
      $keywords = preg_split("/[_]+/", $string);
      //reconstruction du nom
      $page_name = "";
      foreach($keywords as $keywords){
        $page_name = $page_name.$keywords." ";
      }
      return $page_name;
    }

    //afficher le contenu d'une page
    function AfficherContenuPage($page){
      foreach ($page->getArticles() as $article) {
		echo "<div class='article'>";
			$this->articleManager->AfficherContenu($article);
		echo "</div>";
		
      }
    }

}
