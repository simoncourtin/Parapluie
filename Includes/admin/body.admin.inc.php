
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
						
						echo "<p><a href='?action=modify&path=".$a->getPath()."'>Modifier</a></p>";
					}
					$articleManager->AfficherContenu($a);
				echo "</div>";
			}
	  }
	  if(isset($_GET["action"])) {
		if($_GET["action"] == "modify") {
			if(isset($_GET["path"])){
				$path =  $_GET["path"];
				$article = $articleManager->getArticle($path);
				$articleManager->getContenu($article);
				?>
				<form action="Includes/admin/action.admin.php" method="POST">
					<textarea name="contenu" rows="10" cols="60"><?php echo $article->getContent(); ?>	</textarea>
					<br>
					<input type="text" name="path" value="<?php echo $article->getPath(); ?>" hidden>
					<input type="submit" name="submit" value="Modifier">
				</form>
				<?php
			}
		}
	  
	  }
	?>
	</div>
	
<body>

