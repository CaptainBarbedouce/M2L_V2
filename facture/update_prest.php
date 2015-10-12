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
				$req = 'SELECT * FROM PRESTATION WHERE code = :id';
				$ex = $bdd->prepare($req);
				$ex->bindParam('id', $id, PDO::PARAM_INT);
				$ex->execute();
				$donnees = $ex->fetch()
			?>
			<form method="post" action="upd_prest.php?id=<?php echo $id; ?>">
				<p>
					<?php
					 	echo "<label>Libelle</label> : <input type=\"text\" name=\"libelle\" value=". $donnees['libelle'] . "/><br>";
					 	echo "<label>Prix unitaire</label> : <input type=\"text\" name=\"pu\" value=". $donnees['pu'] . " /><br>";
					?>
				<input type="submit" value="Envoyer"/>
			</form>
		</section>
	</body>
</html>