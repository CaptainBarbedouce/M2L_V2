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
				$lib = $_POST['libelle'];
				$pu = $_POST['pu'];

				$req = "UPDATE PRESTATION SET libelle = :lib, pu = :pu WHERE code = :id";
				$ex = $bdd->prepare($req);
				$ex->bindParam('id', $id, PDO::PARAM_INT);
				$ex->bindParam('lib', $lib);
				$ex->bindParam('pu', $pu);
				$ex->execute();
			?>
			L'entrée a bien été mise à jour
			<meta http-equiv="refresh" content="2;prestations_modif.php">
		</section>
	</body>