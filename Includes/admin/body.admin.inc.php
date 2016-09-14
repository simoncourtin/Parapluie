
<body>
	<div id="corps">
	<h2><?php echo $page->getName(); ?></h2>
	
	<?php
		//si la page existe
	  if(isset($page)){
			//Article manager
			$articleManager = new ArticleManager();
			//Recuperation des arcticles de la page
			$articles = $page->getArticles();
			$i = 0 ;
			//boucle sur tout les articles
			foreach ($articles as $a) {
				echo "<div>";
					//Recuperation contenu de l article
					$articleManager->getContenu($a);
					if(pathinfo($a->getPath())['extension'] == "md"
					OR pathinfo($a->getPath())['extension'] == "html"){
						
						echo "<p><a href='?path=".$a->getPath()."'>Modifier</a></p>";
					}
					$articleManager->AfficherContenu($a);
				echo "</div>";
			}
	  }
	?>
	</div>
	
<body>

