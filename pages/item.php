<script>
    function ajoutPanier(id_article,bullePanier){
        $.get("./sql/ajoutPanier.php",
                    {id: id_article}, 
                    function(data) {

                        alert ("article : "+id_article+" a été ajouté à votre panier");
                        
                        $("#panierRouge").html(bullePanier+1);
                    });
    }

</script>


<?php
session_start();
include '../../connexionBDD.php';
$id_client=$_SESSION['id_client'];
$nbPanier=$mysql->query("SELECT count(*) FROM sa_article_commande JOIN sa_commande ON sa_commande.id=sa_article_commande.commande_id JOIN sa_client ON sa_client.id=sa_commande.client_id WHERE sa_client.id=$id_client AND sa_commande.etat='panier'");
$leNbPanier=$nbPanier->fetchAll();
$bullePanier=$leNbPanier[0][0];

$id_article=$_GET['id'];
$nom=$_GET['nom'];
$description=$_GET['description'];
$prix=$_GET['prix'];
$url=$_GET['url'];
echo '<div class="col-md-6"><h1>'.$nom.'</h1>';
echo '<img src="'.$url.'"></div>';

echo '<div class="col-md-6"><h2>Prix : '.$prix.' €</h2><h2>Description : </h2><h3>'.$description.'</h3>';
echo'<input type="button" class="btn-primary" value="+ Ajouter au panier" onclick="ajoutPanier('.$id_article.','.$bullePanier.');"></div>';


?>
