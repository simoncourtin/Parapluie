<?php
	$menu = "";
	$data = $pageManager->getPage($GLOBALS['pages']);
	foreach ($data->getPages() as $p) {
	  $name_p = $p->getName();
	  //on considère que les rep des page est la racine
	  // on extrait donc ./data/pages
	  $adr_p = preg_split("#".$GLOBALS['pages']."/#", $p->getPath())[1];
	  $menu = $menu."<li><a href='index.admin.php?action=read&page=$adr_p'>$name_p</a></li>"."\n";
	}
?>
<div class="navbar-fixed">
	<nav>
		<div class="nav-wrapper top-container ">
		  <span>Administration</span>
		  <a href="#" data-activates="mobile-demo" class="button-collapse grey-text text-darken-3"><i class="material-icons">menu</i></a>

		</div>
		<div>
			<ul id="slide-out" class="side-nav fixed leftside-navigation ps-container ps-active-y">
				<?php echo $menu;?>
			</ul>
			<ul class="side-nav leftside-navigation ps-container ps-active-y" id="mobile-demo">
				<?php echo $menu;?>
			</ul>
		</div>
	</nav>
</div>


