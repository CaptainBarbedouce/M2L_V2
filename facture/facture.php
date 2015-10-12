<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
 
?>

<html>
	<head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css"/>
        <title>Application facture</title>
    </head>
	<?php include("menu_facture.php"); ?>
	<body>
		<section>

			<FORM method="post" action="add.php">
				<SELECT name="prest">					
				<?php
					$reponse = $bdd->query('SELECT * FROM PRESTATION');
						while ($donnees = $reponse->fetch())
						{
					?>
						<OPTION value=<?php echo $donnees['code']; ?>><?php echo $donnees['libelle']; ?>
				<?php
				}
				?>
			</SELECT>
			<br>
			<input type=number name="qte"><br>
			<input type="submit" value="AJOUTER"/>
			<INPUT TYPE="reset" NAME="nom" VALUE=" Annuler "><br>
			</form>
			<FORM method="post" action="create_facture.php">
			Selectionner une ligue <br>
			<?php
				$reponse = $bdd->query('SELECT * FROM LIGUE');
			?>
				<SELECT name="lig">
					<?php
						while ($donnees = $reponse->fetch())
						{
					?>
						<OPTION value=<?php echo $donnees['numcompte']; ?> ><?php echo $donnees['intitule']; ?>
					<?php
						}
					?>
				</SELECT><br>
				<input type="submit" value="Créer facture"/>
			</form>
		</section>
	</body>
</html>