<html>
	<head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css"/>
        <title>Application facture</title>
    </head>
	<?php include("menu_facture.php"); ?>
	<body>
		<section>
			<article>
				<table>
					<tr>
						<td>Nom</td>
						<td>Trésorier</td>
						<td>Adresse</td>
						<td>Modifier</td>
						<td>Supprimier</td>
					</tr>
						<?php
							$reponse = $bdd->query('SELECT * FROM LIGUE');

							while ($donnees = $reponse->fetch())
							{
							?>
							<tr>
								<td><?php echo $donnees['intitule']; ?></td>
								<td><?php echo $donnees['nomtresorier']; ?></td>
								<td><?php echo $donnees['adressrue']; ?> </br> <?php echo $donnees['CP']; echo $donnees['Ville'];  ?></td>
								<td><?php echo "<a href=\"update_ligue.php?id=$donnees[numcompte]\"><img src=\"img/modif_logo.png\" height=\"20\" width=\"20\"></a>"?></td>
								<td><?php echo "<a href=\"delete_ligue.php?id=$donnees[numcompte]\"><img src=\"img/supp_logo.png\" height=\"20\" width=\"20\"></a>"?></td>
							</tr>
							<?php
							}
							?>
							</table>
							<?php
							$reponse->closeCursor();
							echo "<a href=\"add_ligue.php?id=$donnees[numcompte]\">AJOUTER UNE LIGUE</a>";
						?>
			</article>
		</section>
	</body>
</html>