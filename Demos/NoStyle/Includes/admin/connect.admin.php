
<?php
if(!isset($_POST['connexion_sumbmit'])) {
?>
<div id="formulaire_connect">
	<h1> Connexion</h1>
	  <div class="row">
		<form class="col s12" action="#" method="post">
		  <div class="row">
			<div class="input-field col s6">
			  <i class="material-icons prefix">account_circle</i>
			  <input id="id_user" name="id_user" type="text" class="validate">
			  <label for="id_user">Identifiant</label>
			</div>
		  </div>
		  <div class="row">
			<div class="input-field col s6">
			  <i class="material-icons prefix">lock</i>
			  <input id="id_pass" name="id_pass" type="password" class="validate">
			  <label for="id_pass">Mot de passe :</label>
			</div>
		  </div>
		  <div class="row">
			<input class="btn" name="connexion_sumbmit" type="submit" value="Connexion">
		  </div>
		</form>
	  </div>    
</div>
<?php
} else {
	if(isset($_POST['id_user']) && isset($_POST['id_pass'])){
		//Test si on trouve le user avec le bon mdp
		var_dump($GLOBALS["users"][$_POST['id_user']]);
		var_dump(md5(md5($_POST['id_pass']).$GLOBALS['grain_sel']));
		if(isset($GLOBALS["users"][$_POST['id_user']]) && 
			md5(md5($_POST['id_pass']).$GLOBALS['grain_sel']) === $GLOBALS["users"][$_POST['id_user']]){
			$_SESSION['user'] = $_POST['id_user'];	
			
		}
		header("location:index.admin.php");
	}
	
}
?>