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
			<?php
			$lig = $_POST['lig'];
			$id = uniqid("FC");
			$datem = date("Y/m/d");
			$finmois = date("Y/m/t");
			$req = 'INSERT INTO facture VALUES (:id, :datem, :finmois, :lig)';
			$ex = $bdd->prepare($req);
			$ex->bindParam('id', $id);
			$ex->bindParam('datem', $datem);
			$ex->bindParam('finmois', $finmois);
			$ex->bindParam('lig', $lig);
			$ex->execute();

			$reponse = $bdd->query("SELECT * FROM LIGUE WHERE numcompte = '$lig'");
			$donnees = $reponse->fetch();
			echo "CROSL <br>
				Maison Régionale des Sports de Lorraine <br>
				13 rue Jean Moulin<br>
				BP 70001<br>
				54510 TOMBLAINE<br>
				Siret 31740105700029  <br>
				Tél 03.83.18.87.02 <br>
				Fax 03.83.18.87.03 13 <br>
				<div id='adr'>
				".$donnees['intitule']."<br>
				A l'attention de".$donnees['nomtresorier']."<br>
				Maison Régionale des Sports de Lorraine <br>
				13 rue Jean Moulin<br>
				54510 TOMBLAINE</div><br><br>
				Date Facture".$datem."<br>
				Echéance".$finmois."
				<br><br><p class='textCenter'>FACTURE ".$id." </p>
				<br><br>
				<table>
				<tr>
					<td> Référence</td>
					<td> Désignation</td>
					<td>Quantité</td>
					<td> PU HT</td>
					<td> Montant TTC</td>
				</tr>";
			$i = 0;
			while ($i < $_SESSION['i'])
			{
				$tmp =$_SESSION['fac'][$i][0];
				$reponse = $bdd->query("SELECT * FROM prestation WHERE code = '$tmp'");
				$prestation = $reponse->fetch();
				echo "<tr>
						<td>".$prestation['code']."</td>
						<td>".$prestation['libelle']."</td>
						<td>".$_SESSION['fac'][$i][1]."</td>
						<td>".$prestation['pu']."</td>
						<td>".($prestation['pu']*1.2)."</td>
					</tr>";

				$req = 'INSERT INTO ligne_facture VALUES (:id, :prest, :qte)';
				$ex = $bdd->prepare($req);
				$ex->bindParam('id', $id);
				$ex->bindParam('prest', $_SESSION['fac'][$i][0]);
				$ex->bindParam('qte', $_SESSION['fac'][$i][1]);
				$ex->execute();
				$i++;
			}
		?>
	</body>
	</html>