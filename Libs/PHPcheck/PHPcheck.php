<?php
/*
Ce script est placé sous la license GPL.
Auteur : Quentin Cormier
http://www.robotix.fr
Site du script : http://pascal.cormier.free.fr/correcteur/
*/
header('Content-Type: text/html; charset=iso-8859-1');
ini_set("memory_limit",'160M');
if(isset($_GET['source'])) 
	show_source(__FILE__);    
/*
 * Définition des variables globales
 */
$explode = '\s,\/\n\r()<>."\';?!:='; //Cacractères à exploser
$extrawords = array(" ", ",", "<", ">", "(", ")", ".", "/", "\\", "\"", "\n", "\r", "\t", ";", ":", "=", "'", "!", "?", "l", "n", "qu", "d", "c", "s", "n", "t", "j", "m", "a", "à");
$chemin = 'dictionnaire/';


/*
 * Fonction qui corrige un mot
 */
function correct_word($mot, $dictionnaire) 
{
	$mot_entre = strtolower($mot);
	if(in_array($mot_entre, $dictionnaire)) 
	{
		$faute = false;
		$correction = false;
	}
	else 
	{ //Si le mot n'est pas dans le dictionnaire
		$distance = -1; //On va rechercher des distances de mots : pour l'instant, elle est à moins un.
		$suggestions = array();
		foreach($dictionnaire as $mot_dico) 
		{
			
			$lev = levenshtein($mot_entre, $mot_dico);
			if($lev <= 2) 
			{
				$faute = true;
				$correction = true;
				$suggestions[$lev] = $mot_dico;
			}
		}
		if (!isset($faute)) { //Si il n'existe aucun mot à correspondance exacte et si le mot est trop éloigné du dico
			$faute = true;
			$correction = false;
		}
	}


	if ($faute && $correction)
	{
		ksort($suggestions);
		$return =  '<acronym title="Nous vous proposons  : '.implode(' ', $suggestions).'" style="color:orange;">'.$mot.'</acronym>'; 
	}
	elseif ($faute && !$correction)
		$return = '<acronym title="aucune suggestion trouvée" style="color:red;">'.$mot.'</acronym>';
	else
		$return = $mot;

	return $return;
}
/*
 * Fonction qui applique à chaque mot la fonction correct_word
 */
function correct_text($texte) 
{
	global $explode, $extrawords; 
	
	$mots = preg_split('/(['.$explode.'])/', $texte, -1, PREG_SPLIT_DELIM_CAPTURE);
	$mots = array_filter($mots); //On enlève tous les débrits d'array que l'on a créé en explosant le texte
	$dictionnaires = charge_dicos($mots); //On charge les dictionnaires;
	$resultat = array();
	foreach($mots as $mot) 
	{
		if(!is_numeric($mot) AND !in_array(strtolower($mot), $extrawords)) {
			if(is_correct($mot))	{
				$dico = name_dico($mot);
				$resultat[] =  correct_word($mot, $dictionnaires[$dico]);
			}
			else
				$resultat[] = '<acronym title="aucune suggestion trouvée (Pas à corriger)" style="color:red;">'.$mot.'</acronym>';
		}
		else
			$resultat[] = $mot;
	}
	return implode('', $resultat);
}

/*
* Fonction qui charge les dictionnaires nécéssaires à la correction du texte
*/
function charge_dicos($mots) 
	{
	global $extrawords, $chemin; 
	$dico_a_charger = array();
	foreach($mots AS $mot) 
	{
		if(!in_array($mot, $extrawords) && is_correct($mot) && !is_numeric($mot))
			$dico_a_charger[] = name_dico($mot);
	}
	$dico_a_charger = array_unique($dico_a_charger); //On enlève tous les doublons
	$dictionnaires = array();
	foreach($dico_a_charger as $dico) 
	{
		if(file_exists($chemin.$dico.'.txt')) 
		{
			$dictionnaire = file($chemin.$dico.'.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
			$dictionnaires[$dico] = array_map('rtrim', $dictionnaire);
		}
		else
			$dictionnaires[$dico] = array(); // Pas de dictionnaire correspondant, on envoit du vide pour éviter une erreur
	}
	return $dictionnaires;
}
/*
 * Fonction pour obtenir le nom du dictionnaire approprié
 */
function name_dico($mot) 
{
	$mot = strtolower($mot);
	$lenght = strlen($mot);
	$mot = no_accents($mot);
	if ($lenght < 2)
		return $mot[0].'.-.1-3';
	elseif ($lenght > 26)
		return $mot[0].'.'.$mot[1].'25-27';
	else
		return $mot[0].'.'.$mot[1].'.'.($lenght-1).'-'.($lenght+1);
}

/*
* Fonction qui vérifie si les deux premiers caractères de chaque mot est bien une lettre ou un tiret
*/
function is_correct($mot) 
{
	$mot = no_accents(strtolower($mot));
	if (((ord($mot[0])>=97 AND ord($mot[0])<=122) OR ord($mot[0])==45) AND ((ord($mot[1])>=97 AND ord($mot[1])<=122) OR ord($mot[1])==45) AND ord($mot[0])!=60)
		return true;
	else
		return false;
}
/*
* Fonction qui enlève les accent d'un mot
*/
function no_accents($mot) 
{
	$mot = preg_replace("#(à|ä|â)#", "a", $mot);
	$mot = preg_replace("#(é|è|ê|ë)#", "e", $mot);
	$mot = preg_replace("#(ï|î)#", "i", $mot);
	$mot = preg_replace("#(ö|ô)#", "o", $mot);
	$mot = preg_replace("#(ü|û|ù)#", "u", $mot);
	$mot = preg_replace("#(ç)#", "c", $mot);
	return $mot;
}

?>
