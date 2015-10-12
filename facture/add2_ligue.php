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
				$lig = $_POST['intitule'];
				$tres = $_POST['nomtresorier'];
				$adr = $_POST['adresse'];
				$ville = $_POST['ville'];
				$cp = $_POST['cp'];

				$req ="INSERT INTO ligue VALUES (:lig, :tres, :adr, :ville, :cp)";
			?>
		</section>
	</body>
</html>