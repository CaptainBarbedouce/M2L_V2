<html>
	<head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css"/>
        <title>Application facture</title>
    </head>
	<?php include("menu_facture.php"); ?>
	<body>
		<section>
			<form method="post" action="add2_prest.php">
			<label>Code</label> : <input type="text" name="code"/><br>
			<label>Libelle</label> : <input type="text" name="libelle"/><br>
			<label>Prix unitaire</label> : <input type="text" name="pu"/><br>
			<input type="submit" value="Envoyer"/>
			</form>
		</section>
	</body>
</html>