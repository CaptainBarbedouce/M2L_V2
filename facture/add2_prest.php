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
				$code = $_POST['code'];
				$libel = $_POST['libelle'];
				$pu = $_POST['pu'];

				$req ="INSERT INTO PRESTATION VALUES (:code, :libel, :pu)";
				$ex = $bdd->prepare($req);
				$ex->bindParam('code', $code);
				$ex->bindParam('libel', $libel);
				$ex->bindParam('pu', $pu);
				$ex->execute();
			?>
			L'entrée à bien été inserer
			<meta http-equiv="refresh" content="2;prestations_modif.php">
		</section>
	</body>
</html>