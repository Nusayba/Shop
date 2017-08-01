
<?php
    include '../../connexionBDD.php';

    session_start();
    $id_client=$_SESSION['id_client'];

    $mysql->query("UPDATE sa_commande SET etat='valider' WHERE sa_commande.client_id='$id_client' AND sa_commande.etat='panier';");
    
    echo'<h1>Votre commande a été validé</h1>';
    echo'<h3>Adresse de livraison : </h3>';
    
    $adresse=$mysql->query("SELECT sa_client.adresse FROM sa_client WHERE sa_client.id='$id_client'");
    $lAdresse=$adresse->fetchAll();
    echo'<p>'.$lAdresse[0]['adresse'].'</p>';
    
    echo '<input type="button" value="Payer" class="btn-primary" onclick=\'$("#contain-page").load("./pages/payerCommande.php");\'>';
    

?>

<script>
    $("#panierRouge").html("0");
</script>