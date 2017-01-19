
<?php
    include 'connexionBDD.php';

    session_start();
    $id_client=$_SESSION['id_client'];

    $mysql->query("UPDATE commande SET etat='valider' WHERE commande.client_id='$id_client' AND commande.etat='panier';");
    
    echo'<h1>Votre commande a été validé</h1>';
    echo'<h3>Adresse de livraison : </h3>';
    
    $adresse=$mysql->query("SELECT client.adresse FROM client WHERE client.id='$id_client'");
    $lAdresse=$adresse->fetchAll();
    echo'<p>'.$lAdresse[0]['adresse'].'</p>';
    
    echo '<input type="button" value="Payer" class="btn-primary" onclick=\'$("#contain-page").load("./pages/payerCommande.php");\'>';
    

?>

<script>
    $("#panierRouge").html("0");
</script>