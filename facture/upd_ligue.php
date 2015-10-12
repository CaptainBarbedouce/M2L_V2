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
				$lig = $_POST['intitule'];
				$tres = $_POST['nomtresorier'];
				$adr = $_POST['adresse'];
				$ville = $_POST['ville'];
				$cp = $_POST['cp'];
				

				$req = "UPDATE ligue SET intitule = :lig, nomtresorier = :tres, adressrue = :adr, CP = :cp, Ville = :ville WHERE numcompte = :id";
				$ex = $bdd->prepare($req);
				$ex->bindParam('id', $id, PDO::PARAM_INT);
				$ex->bindParam('lig', $lig);
				$ex->bindParam('tres', $tres);
				$ex->bindParam('adr', $adr);
				$ex->bindParam('ville', $ville);
				$ex->bindParam('cp', $cp);
				$ex->execute();
			?>
			L'entrée a bien été mise à jour
			<meta http-equiv="refresh" content="2;modif_ligues.php">
		</section>
	</body>
</html>