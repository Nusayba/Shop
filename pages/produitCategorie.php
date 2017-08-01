        <script>
            function afficheArticle(id_article, nom_article, description_article, prix_article, url_article){
                console.log (id_article);
                $.get("./pages/item.php",
                    {id: id_article, nom: nom_article, prix: prix_article, url: url_article, description: description_article}, 
                    function( data ) {

                        $("#contain-page").html(data);
                    });
                }
        </script>

<?php





    if(isset($_GET['cat'])){
        $categorie=$_GET['cat'];
        include '../../connexionBDD.php';
        $produits=$mysql->query("SELECT sa_produit.nom, sa_produit.url, sa_produit.description, sa_produit.prix, sa_produit.id FROM sa_produit JOIN sa_categorie ON sa_categorie.id=sa_produit.categorie_id WHERE sa_categorie.nom='$categorie' ORDER BY sa_produit.nom");
        $lesProduits=$produits->fetchAll();
        echo "<h1>".$categorie."</h1>";
    }elseif(isset($_GET['recherche'])){
        $categorie=$_GET['categorie'];
        $champRecherche=$_GET['recherche'];
        include '../../connexionBDD.php';
        $produits=$mysql->query("SELECT sa_produit.nom, sa_produit.url, sa_produit.description, sa_produit.prix, sa_produit.id FROM sa_produit JOIN sa_categorie ON sa_categorie.id=sa_produit.categorie_id WHERE sa_categorie.nom='$categorie' AND sa_produit.nom LIKE '%$champRecherche%' ORDER BY sa_produit.nom");
        $lesProduits=$produits->fetchAll();
        echo "<h1>".$categorie."</h1>";
    }else{
        $produits=$mysql->query("SELECT sa_produit.nom, sa_produit.url, sa_produit.description, sa_produit.prix, sa_produit.id FROM sa_produit JOIN sa_categorie ON sa_categorie.id=sa_produit.categorie_id WHERE sa_produit.id=1 OR sa_produit.id=2 OR sa_produit.id=3 OR sa_produit.id=17 OR sa_produit.id=20 OR sa_produit.id=13 ORDER BY sa_produit.nom");
        $lesProduits=$produits->fetchAll();
    }

    
        
    
foreach ($lesProduits as $value) {
        $nom=$value['nom'];
        $description=$value['description'];
        $prix=$value['prix'];
        $url=$value['url'];
        $id=$value['id'];
        
        echo'<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="'.$url.'" alt="">
                            <div class="caption">
                                <h4 class="pull-right">'.$prix.' €</h4>
                                <h4><a onclick="afficheArticle(\''.$id.'\',\''.$nom.'\',\''.$description.'\',\''.$prix.'\',\''.$url.'\');">'.$nom.'</a>
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
