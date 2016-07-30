<?php
	$menu = "";
	$data = $pageManager->getPage('./Data');
	foreach ($data->getPages() as $p) {
	  $name_p = $p->getName();
	  $adr_p = preg_split("#./Data/#", $p->getPath())[1];
	  $menu = $menu."<li><a href='index.php?page=$adr_p'>$name_p</a></li>"."\n";
	}
?>

<div id="menu">
  <ul class="right hide-on-med-and-down">
	<?php echo $menu;?>
  </ul>    
</div>
