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
			$idsupp = $_GET['id'];
			$req = ('DELETE FROM PRESTATION WHERE code = :idsupp');
			$ex = $bdd->prepare($req);
			$ex->bindParam('idsupp', $idsupp, PDO::PARAM_INT);
			$ex->execute();
		?>
		L'entrée a bien été supprimé
		<meta http-equiv="refresh" content="2;prestations_modif.php">
		</section>
	</body>
</html>
