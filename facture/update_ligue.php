<html>
	<head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css"/>
        <title>Application facture</title>
    </head>
	<?php include("menu_facture.php"); ?>
	<body>
		<section>
			<?php 
				$id = $_GET['id'];
				$req = 'SELECT * FROM LIGUE WHERE numcompte = :id';
				$ex = $bdd->prepare($req);
				$ex->bindParam('id', $id, PDO::PARAM_INT);
				$ex->execute();
				$donnees = $ex->fetch()
			?>
			<form method="post" action="upd_ligue.php?id=<?php echo $id; ?>">
				<p>
					<?php
					 	echo "<label>Nom ligue</label> : <input type=\"text\" name=\"intitule\" value=". $donnees['intitule'] . "/><br>";
					 	echo "<label>Nom trésorier</label> : <input type=\"text\" name=\"nomtresorier\" value=". $donnees['nomtresorier'] . " /><br>";
					 	echo "<label>Adresse</label> : <input type=\"text\" name=\"adresse\" value=". $donnees['adressrue'] . "/><br>";
						echo "<label>Code postal</label> : <input type=\"text\" name=\"cp\" value=". $donnees['CP'] . "/><br>";
						echo "<label>Ville</label> : <input type=\"text\" name=\"ville\" value=". $donnees['Ville'] . "/><br>";
					?>
				<input type="submit" value="Envoyer"/>
			</form>
		</section>
	</body>
</html>