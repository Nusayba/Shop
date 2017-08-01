<?php
include '../../connexionBDD.php';

    session_start();
    $id_client=$_SESSION['id_client'];

    $mysql->query("UPDATE sa_commande SET etat='payer' WHERE sa_commande.client_id='$id_client' AND sa_commande.etat='valider';");

echo '<h1>Paiement validé</h1>';
echo 'Votre commande a été validé, vous recevrez un mail lors de son expédition';

?>