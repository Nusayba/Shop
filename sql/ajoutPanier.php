<?php

$id_article=$_GET['id'];

session_start();
$id_client=$_SESSION['id_client'];




include '../../connexionBDD.php';
    
    $commande=$mysql->query("SELECT * FROM sa_commande WHERE sa_commande.client_id='$id_client' AND sa_commande.etat='panier';");
    $lacommande=$commande->fetchAll();
    $lTab= sizeof($lacommande);
    
    if($lTab==0){
        //je crée une commande et ajoute l'article
        echo' commande créé';
        $mysql->query("INSERT INTO sa_commande(date, etat, client_id) VALUES ('18/01/2017','panier',$id_client);");
        
        
    }else{
        //pas de création de commande
        
    }
    $commande_id=$mysql->query("SELECT sa_commande.id FROM sa_commande JOIN sa_client ON sa_client.id=sa_commande.client_id WHERE sa_client.id='$id_client' AND sa_commande.etat='panier'");
        $lacommande_id=$commande_id->fetchAll();
        $id_commande_cree=$lacommande_id[0]['id'];
        $mysql->query("INSERT INTO sa_article_commande(produit_id, commande_id, quantite) VALUES ($id_article,$id_commande_cree,1);");
        
    
?>
