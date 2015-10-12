<html>
	<head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css"/>
        <title>Application facture</title>
    </head>
	<?php include("menu_facture.php"); ?>
	<body>
		<section>
			<form method="post" action="add2_ligue.php">
			<label>Nom ligue</label> : <input type="text" name="intitule"/><br>
			<label>Nom trésorier</label> : <input type="text" name="nomtresorier"/><br>
			<label>Adresse</label> : <input type="text" name="adresse"/><br>
			<label>Code postal</label> : <input type="text" name="cp"/><br>
			<label>Ville</label> : <input type="text" name="ville"/><br>
			<input type="submit" value="Envoyer"/>
			</form>
		</section>
	</body>
</html>