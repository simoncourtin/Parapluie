<?php

$path =  $_GET["path"];
$article = $articleManager->getArticle($path);
$articleManager->getContenu($article);
if(isset($_POST["submit"])){
	$fileManager->writeFile($_POST["path"],  $_POST["contenu"]);
	//nom de la page
	$page_name = explode($GLOBALS['pages'].'/', $_POST["path"])[1];
	$page_name = explode('/', $page_name)[0];
	header('Location: index.admin.php?action=read&page='.$page_name);
}
else {
	?>
	<form action="?action=modify&path=<?php echo $article->getPath();?>" method="POST">
		<textarea name="contenu" id="contenu" rows="10" cols="60"><?php echo $article->getContent(); ?>	</textarea>
		<br>
		<input type="text" name="path" value="<?php echo $article->getPath(); ?>" hidden>
		<input type="submit" name="submit" value="Modifier">
	</form>
	<script>
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace( 'contenu' );
	</script>
	<?php
}


?>