<?php

$idCommande=$_POST['idCommande'];

include 'connexionBDD.php';

$mysql->query("UPDATE commande SET commande.etat='expédié' WHERE commande.id=$idCommande;");

include '../pages/commandeAdmin.php';

?>