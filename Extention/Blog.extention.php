<?php
class Post extends Article
{
  private $tags;
  private $title;
  private $published_date;
  
  function __construct($post) {
    if (!empty($post)){
      parent::__construct($post);
      $this->setTags($post["post_tags"]);
      $this->setPublishedDate($post["post_published_date"]);
    }
  }

  //getters
  public function getTags(){
    return $this->tags;
  }

  public function getPublishedDate(){
    return $this->published_date;
  }

  //setters

  public function setPublishedDate($published_date){
    $this->published_date = $published_date;
  }
  public function setTags($tags){
    $this->tags = $tags;
  }
}

class PostManager extends ArticleManager{

    function __construct() {
      parent::__construct();
    }
  
    function getPost($path){
      if (is_file($path))
        {
          //scan du fichier
          $element  = basename($path);
          $post = $this->createPost($element,$path);
          return $post;
        }
    }
  
    function createPost($element,$path){
      //création d'une page
      $file_name_explode = explode("-", $element);
      $tag_name_explode = explode("#", $element);
      $tag_str = explode(".",end($tag_name_explode))[0];
      $date = strtotime ( $file_name_explode[0]); 
      $today = date ('d M Y');
      
      $tags =  explode(";",$tag_str);
      $published_date = date ( 'd M Y' , $date );
          
      //date de creation et de modification de la page
      $article_date = date ("d/m/Y : H:i:s.", filectime($path));
      //tableau parametres de la page
      $post_param = array('article_name' => $element,
                          'article_path'=>$path,
                          'article_date'=>$article_date,
                          'post_published_date'=>$published_date,
                          'post_tags'=>$tags);
      //creation de l'objet page
      $post = new Post($post_param);
      return $post;
    }
  
  }

  Class Blog {
    private $post_path;
    function __construct ($post_path){
        $this->post_path = $post_path;
    }

    function readPost($element, $path){ 
        $post_manager = new PostManager();
        $post = $post_manager->getPost($path);
        $post_manager->AfficherContenu($post);
        echo "<i>" .$post->getPublishedDate(). " - ";
        $post_tags = $post->getTags();
        foreach($post_tags as &$tag){
            echo "#".$tag." ";
        }
        echo "</i><br><hr>";
    }

    function printBlog(){
        $dir = $this->post_path;
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
                    //$this->pageManager->getPage($path);

                } else if (is_file($path)) {
                    //c'est un fichier
                    $file_name_explode = explode("-", $element);
                    $date = strtotime ( $file_name_explode[0]); 
                    $today = date ('Ymd');
                    $article_date = date ( 'Ymd' , $date );
                    if($article_date <= $today){
                        $this->readPost($element, $path);
                    }
                }
            }
            closedir($handle);
        }
    }

   

  }