<body>
	<main class="mdl-layout__content">
		<div class="page-content mdl-grid">
			<div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
			<div class=" demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
				
			<h2><?php echo $page->getName(); ?></h2>

			<?php
			  if(isset($page)){
			   $pageManager->AfficherContenuPage($page);
			  }
			?>
		</div>
		</div>
	</main>
</body>
