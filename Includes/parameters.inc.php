<?php

//emplacement des pages ressources
$GLOBALS['pages'] = "Data/Pages";
$GLOBALS['Ressources'] = "Data/Ressources";
//emplacement fichier parametres
$GLOBALS['parameter_file'] = "parametres.txt";


$PARAMETRES =  array();

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

?>
