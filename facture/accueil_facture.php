<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
 
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['i'] = 0;
$_SESSION['fac'][$_SESSION['i']][0] = " ";
$_SESSION['fac'][$_SESSION['i']][0] = 0;
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
			<article>
				<h2 align=center>Application Facture</h2>

			<center><img src="img/sport-site.jpg" id="img-acc"></center>
		</section>
	</body>
</html>