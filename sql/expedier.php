<?php

$idCommande=$_POST['idCommande'];

include '../../connexionBDD.php';

$mysql->query("UPDATE sa_commande SET sa_commande.etat='expédié' WHERE sa_commande.id=$idCommande;");

include '../pages/commandeAdmin.php';

?>