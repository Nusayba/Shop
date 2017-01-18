<?php

$categorie=$_GET['cat'];

include '../sql/connexionBDD.php';
    $sql="SELECT * FROM produit ORDER BY nom;";
    $produits=$mysql->query($sql);
    $lesProduits=$produits->fetchAll();


echo "<h1>".$categorie."</h1>";    
    
foreach ($lesProduits as $value) {
        $nom=$value['nom'];
        $description=$value['description'];
        $prix=$value['prix'];
        $url=$value['url'];
        
        echo'<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/sauces1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">'.$prix.' €</h4>
                                <h4><a href="#">'.$nom.'</a>
                                </h4>
                                <p>'.$description.'</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>';
    }








?>
