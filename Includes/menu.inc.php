<?php

function get_pages_menu($pages, $i, $classes = array( "ul" => array("ul-menu"), "li" => array("li-item"))){
	$ul_class = ($i < count($classes["ul"])) ? $classes["ul"][$i] : end($classes["ul"]);
	$li_class =($i < count($classes["li"])) ? $classes["li"][$i] : end($classes["li"]);
	$menu = "<ul class='".$ul_class."'>\n";
	foreach ($pages as $p) {
		if(!$p->isHidden()){
			$name = $p->getName();
			$path = preg_split("#".$GLOBALS['pages']."/#", $p->getPath())[1];
			$menu = $menu."<li class='".$li_class."'>\n";
			$menu = $menu."<a href='index.php?page=$path'>$name</a>"."\n";
			$size_sub_page = sizeof($p->getPages());
			if(sizeof($p->getPages()) > 0){
				$menu = $menu.get_pages_menu($p->getPages(), $i+1, $classes);
			}
			$menu = $menu."</li>\n";  
		}
	}
	$menu = $menu."</ul>\n";
	return $menu;
}
?>
<!--Html du menu-->

<?php 
	$menuclasses = array(
		"ul" => array("right hide-on-med-and-down", "dropdown-content"),
		"li" => array("li-itemp")
	);
	$data = $pageManager->getPage($GLOBALS['pages']);
	$menu = get_pages_menu($data->getPages(), 0, $menuclasses);
	echo $menu;
?>
