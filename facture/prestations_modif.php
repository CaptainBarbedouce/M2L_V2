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
						<td>Libellé</td>
						<td>Prix unitaire</td>
						<td>Modifier</td>
						<td>Supprimier</td>
					</tr>
						<?php
							$reponse = $bdd->query('SELECT * FROM PRESTATION');

							while ($donnees = $reponse->fetch())
							{
							?>
							<tr>
								<td><?php echo $donnees['libelle']; ?></td>
								<td><?php echo $donnees['pu']; ?> </br></td>
								<td><?php echo "<a href=\"update_prest.php?id=$donnees[code]\"><img src=\"img/modif_logo.png\" height=\"20\" width=\"20\"></a>"?></td>
								<td><?php echo "<a href=\"delete_prest.php?id=$donnees[code]\"><img src=\"img/supp_logo.png\" height=\"20\" width=\"20\"></a>"?></td>
							</tr>
							<?php
							}
							?>
							</table>
							<?php
							$reponse->closeCursor();
							echo "<a href=\"add_prest.php?id=$donnees[code]\">AJOUTER UNE PRESTATION</a>";
						?>
			</article>
		</section>
	</body>
</html>