<body>
	<div id="corps" class="container">
	<h2>
		<?php
		 	//titre de la page
			//echo $page->getName();
		?>
	</h2>
	<?php
	  if(isset($page)){
	   $pageManager->AfficherContenuPage($page);
	  }
	?>
	</div>
</body>
