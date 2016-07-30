
<body>
	<div id="corps">
	<h2><?php echo $page->getName(); ?></h2>
	
	<?php
	  if(isset($page)){
	   $pageManager->AfficherContenuPage($page);
	  }
	?>
	</div>
	
<body>
