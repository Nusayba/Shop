<script>
    function validerCommande(){
        $.get("./sql/validerCommande.php", 
            function(data) {

                $("#contain-page").html(data);
            });
    }

</script>

<?php

include '../../connexionBDD.php';
session_start();
$id_client=$_SESSION['id_client'];

$panier=$mysql->query("SELECT sa_article_commande.produit_id, sa_article_commande.quantite, sa_produit.nom, sa_produit.prix "
        . "FROM sa_article_commande "
        . "JOIN sa_commande ON sa_commande.id=sa_article_commande.commande_id "
        . "JOIN sa_client ON sa_client.id=sa_commande.client_id "
        . "JOIN sa_produit ON sa_produit.id=sa_article_commande.produit_id "
        . "WHERE sa_client.id=$id_client "
        . "AND sa_commande.etat='panier'");
$lePanier=$panier->fetchAll();
    

echo '<h1>Panier</h1>';
echo'<div class="table-responsive"><table class="table-striped">';
echo '<tr>'
. '         <th>Id du produit</th>'
        . '<th>Nom du produit</th>'
        . '<th>Quantité</th>'
        . '<th>Prix unitaire</th>'
        . '<th>Total</th>'
   . '</tr>';
$total=0;
foreach ($lePanier as $value) {
    $total+=$value['prix']*$value['quantite'];
    echo'<tr>';
    echo '<td>'.$value['produit_id'].'</td>';
    echo '<td>'.$value['nom'].'</td>';
    echo '<td>'.$value['quantite'].'</td>';
    echo '<td>'.$value['prix'].' €</td>';
    echo '<td>'.($value['prix']*$value['quantite']).' €</td>'; 
    echo'</tr>';
}
echo'<tr><td colspan=3><h4 class="total">TOTAL de la commande : </h4></td><td colspan=2><h4 class="total">'.$total.' €</h4></td></tr>';
echo'</table></div>';

echo'<p><input type="button" class="btn-primary" value="Valider ma commande" onclick="validerCommande();"></p>';


?>