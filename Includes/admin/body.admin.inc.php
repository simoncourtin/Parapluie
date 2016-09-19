
<body id="main">

	<div id="corps">
		<?php
			//Article manager
			$articleManager = new ArticleManager();
			//File manager
			$fileManager = new FileManager();
			
		  if(isset($_SESSION['user'])) {
			  if(isset($_GET["action"])) {
				if($_GET["action"] == "read"){
					echo "<h2>".$page->getName()."</h2>";
					include "Includes/admin/read.admin.php";
					
				}
				else if($_GET["action"] == "modify") {
					if(isset($_GET["path"])){
						include "Includes/admin/modify.admin.php";
					}
				}
			  
			  }
		  } else {
			include "Includes/admin/connect.admin.php";
		  }
		?>
	</div>
	
<body>

