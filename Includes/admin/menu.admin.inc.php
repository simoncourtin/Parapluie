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

<div id="menu">
  <ul>
	<?php echo $menu;?>
  </ul>    
</div>
