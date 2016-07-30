<?php

//Classe qui gere les fichiers et leur contenu selon leur type/extention
class FileManager {

    private $markdownParser;

    //constructor
    public function __construct() {

        $this->markdownParser =  new Parsedown();
    }

  //Lire un fichier avec path
   public function readFile($adrFile) {
    $str= file_get_contents($adrFile);
    return $str;
   }

   //recuperer le contenu du fichier avec le path et selon l'extension
   public function getFileContent($path) {
		return $this->readFile($path);
   }
   
   
   //recuperer le contenu du fichier avec le path et selon l'extension
   public function AfficheFileContent($path) {
     switch (pathinfo($path)['extension']) {
       case 'md':
        //fichier markdon
         echo $this->translateMarkdownToHTML($path);
         break;
      case 'html':
      //fichier html
           echo $this->readFile($path);
           break;
      case 'php':
      //fichier php
          include $path;
          break;
       default:
         # code...
         break;
     }

   }

   //fonction de translate makdown vers HTML
   function translateMarkdownToHTML($path){
     $content_file = $this->readFile($path);
     $html = $this->markdownParser->text($content_file);
     return $html;

   }

}
