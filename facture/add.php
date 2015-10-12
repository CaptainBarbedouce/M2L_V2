<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

$_SESSION['fac'][$_SESSION['i']][0] = $_POST['prest'];
$_SESSION['fac'][$_SESSION['i']][1] = $_POST['qte'];
$_SESSION['i']++;

header('Location: facture.php');
?>
