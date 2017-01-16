<header>
	<nav class="light-blue lighten-1" role="navigation">
		<div class="nav-wrapper container"><a id="logo" href="#" class="brand-logo">&#9730;</a>
			<?php
			  require_once("Includes/menu.inc.php");
			?>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>
</header>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div id="titre" class="container">
        <h1 id="titre-site" class="header center teal-text text-darken-2"><?php echo $GLOBALS['parametres']['titre_site'] ; ?></h1>
        <div class="row center">
          <h5 class="header col s12 light">Une solution simple et rapide pour votre site web</h5>
        </div>
        <div class="row center">
          <a href="https://github.com/simoncourtin/Parapluie" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Telecharger</a>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="Data/Ressources/umbrella.jpg" alt="Paralax1"></div>
  </div>
