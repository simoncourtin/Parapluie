<h2>3. Lecture des fichiers php <i class="bi bi-filetype-php"></i></h2>
<span id="fichiers-php"></span>

<p>Le langague php est central pour la conception des site internet notament pour la mise en places des éléments dynamiques. Le contenu des fichiers <code>.php</code> sont interprétés permettant ainsi de développer une multitude de fonctionnalités dans vos page web.<a href="https://www.php.net/manual/fr/intro-whatis.php" >Documentation PHP</a></p>


<br>

<?php 
    echo "Date affiché à partir de la fonction PHP date() : "; 
    setlocale(LC_TIME, 'fr_FR');
    date_default_timezone_set('Europe/Paris');
    echo utf8_encode(strftime('%A %d %B %Y, %H:%M'));
?>
<br>

<?php
// prints e.g. 'Current PHP version: 4.1.1'
echo 'Version PHP : ' . phpversion();

// prints e.g. '2.0' or nothing if the extension isn't enabled
echo phpversion('tidy');
?>

