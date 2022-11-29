<?php
/*
//autoloader for PHP version < 7.0
function __autoload($className)
{
	if (!@include($className . '.php')) {
		require $className.'.class.php';
	}
}
*/

//autoloader for PHP version >= 7.0
spl_autoload_register(function($className)
{
	if (!@include($className . '.php')) {
		require $className.'.class.php';
	}
});

//Define the paths to the directories holding class files
$paths = array(
'Classes/',
'Libs/Parsedown'
);
//Add the paths to the class directories to the include path.
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $paths));
//Add the file extensions to the SPL.
//spl_autoload_extensions(".class.php,.php");
//Register the default autoloader implementation in the php engine.
//spl_autoload_register();
?>
