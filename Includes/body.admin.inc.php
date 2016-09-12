
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
				//Recuperation contenu de l article
				$articleManager->getContenu($a);
				if(pathinfo($a->getPath())['extension'] == "md"
				OR pathinfo($a->getPath())['extension'] == "html"){
					$articleEditor = "article".$i;
					?>
					<div>
						<h3><?php echo $a->getName(); ?></h3>
						<form action="#" method="post">
							<textarea name="<?php echo $articleEditor; ?>" id="<?php echo $articleEditor; ?>" rows="20" cols="60">
								<?php echo $a->getContent(); ?>
							</textarea>
							<br>
							<input type="submit" value="Modifier">
						</from>
						<script>
								// Replace the <textarea id="editor1"> with a CKEditor
								// instance, using default configuration.
								AlloyEditor.editable('editor1');
						</script>
					</div>
					<?php
				} else {
						echo "<div>";
						$articleManager->AfficherContenu($a);
						echo "</div>";
				}
				$i++;
			}
	  }
	?>
	</div>
	
<body>
