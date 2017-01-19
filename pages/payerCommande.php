<?php
include '../sql/connexionBDD.php';

    session_start();
    $id_client=$_SESSION['id_client'];

    $mysql->query("UPDATE commande SET etat='payer' WHERE commande.client_id='$id_client' AND commande.etat='valider';");

echo '<h1>Paiement validé</h1>';
echo 'Votre commande a été validé, vous recevrez un mail lors de son expédition';

?>