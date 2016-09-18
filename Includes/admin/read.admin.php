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
			echo "<h3>".$a->getName()."</h3>";
			//Recuperation contenu de l article
			$articleManager->getContenu($a);
			if(pathinfo($a->getPath())['extension'] == "md"
			OR pathinfo($a->getPath())['extension'] == "html"){
				
				echo "<p><a href='?action=modify&path=".$a->getPath()."'>Modifier</a></p>";
			}
			$articleManager->AfficherContenu($a);
		echo "</div>";
	}
}

?>