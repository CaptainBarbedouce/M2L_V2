<html>
	<head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css"/>
        <title>Application facture</title>
    </head>
	<?php include("menu_facture.php"); ?>
	<body>
		<section>
			<FORM method="post" action="">
			Selectionner une ligue <br>
			<?php
				$reponse = $bdd->query('SELECT * FROM LIGUE');
			?>
				<SELECT name="lig">
					<?php
						while ($donnees = $reponse->fetch())
						{
					echo $donnees['intitule'];
						}
					?>
				</SELECT><br>
				<input type="submit" value="Ajouter"/>
			</form>
      <FROM method="date" action="">
        Selectionner une date <br>
        
        <input type="submit" value="Recherche une facture"/>
      </form>
		</section>
	</body>
</html>
