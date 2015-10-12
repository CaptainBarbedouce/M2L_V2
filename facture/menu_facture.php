<html>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="menu.css"/>
	<header>
		<ul id="menu_horizontal">
			<a href="accueil_facture.php"> <img src="img/logo-m2l.png" alt="Logo m2l"/> </a>
			<center>
				<li><a href="modif_ligues.php">Gestion des ligues</a></li>
				<li><a href="prestations_modif.php">Gestion des prestations</a></li>
				<li><a href="facture.php">Créer une nouvelle facture</a></li>
				<li><a href="find_facture.php">Rechercher une ancienne facture</a></li>
			</center>
		</ul>
		<?php
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=Facture;charset=utf8', 'root', '');
			}
			catch (Exception $e)
			{
			        die('Erreur : ' . $e->getMessage());
			}
		?>
	</header>
</html>