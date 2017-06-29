<?php

//emplacement des pages ressources
$GLOBALS['pages'] = "Data/Pages";
$GLOBALS['Ressources'] = "Data/Ressources";
//emplacement fichier parametres
$GLOBALS['parameter_file'] = "parametres.txt";
$GLOBALS['grain_sel'] = "&dce4";
$GLOBALS["users"] = array();


$PARAMETRES =  array();
//fichier de paramètre du site global
$handle = fopen($GLOBALS['parameter_file'], "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $element = preg_split("/[:]+/", $line);
		if(count($element) > 1){
			$PARAMETRES[$element[0]] = utf8_encode(str_replace(array("\r", "\n"), '', $element[1]));
		}
    }
    fclose($handle);
} else {
    // error opening the file.
}

$GLOBALS['parametres'] = $PARAMETRES;

//Parametre admin si le fichier existe
if(file_exists("users.txt")){
//fichier de user
$handle = fopen("users.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $usr_elmnt = preg_split("/[:]+/", $line);
		if(count($usr_elmnt) > 1){
			//on supprime les /r et /n
			$usr_elmnt[1]=str_replace(array("\r", "\n"), '', $usr_elmnt[1]);
			$GLOBALS["users"][$usr_elmnt[0]] = $usr_elmnt[1];
		}
    }
    fclose($handle);
} else {
    // error opening the file.
}
}

?>
