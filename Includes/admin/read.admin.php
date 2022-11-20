<?php

//lecture normale des articles
//si la page existe
if(isset($page)){
	//Recuperation des arcticles de la page
	$articles = $page->getArticles();
	$i = 0 ;
	//boucle sur tout les articles
	foreach ($articles as $a) {
		echo "<div>";
		echo "<ul class='collection with-header'>";
			echo "<li class='collection-header'>";
			//Recuperation contenu de l article
			$articleManager->getContenu($a);
			if(pathinfo($a->getPath())['extension'] == "md"
			OR pathinfo($a->getPath())['extension'] == "html"){
				echo "<a class='waves-effect waves-light btn right' href='?action=modify&path=".$a->getPath()."'>Modifier <i class='material-icons'>edit</i></a>";
			}
			echo "<h5>".$a->getName()."</h5></li>";
			echo "<li class='collection-item'>";
				$articleManager->AfficherContenu($a);
			echo "</li>";
		echo "</ul>";
		echo "</div>";
	}
}

?>