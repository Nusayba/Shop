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
        include '../sql/connexionBDD.php';
        $produits=$mysql->query("SELECT produit.nom, produit.url, produit.description, produit.prix, produit.id FROM produit JOIN categorie ON categorie.id=produit.categorie_id WHERE categorie.nom='$categorie' ORDER BY produit.nom");
        $lesProduits=$produits->fetchAll();
        echo "<h1>".$categorie."</h1>";
    }elseif(isset($_GET['recherche'])){
        $categorie=$_GET['categorie'];
        $champRecherche=$_GET['recherche'];
        include '../sql/connexionBDD.php';
        $produits=$mysql->query("SELECT produit.nom, produit.url, produit.description, produit.prix, produit.id FROM produit JOIN categorie ON categorie.id=produit.categorie_id WHERE categorie.nom='$categorie' AND produit.nom LIKE '%$champRecherche%' ORDER BY produit.nom");
        $lesProduits=$produits->fetchAll();
        echo "<h1>".$categorie."</h1>";
    }else{
        $produits=$mysql->query("SELECT produit.nom, produit.url, produit.description, produit.prix, produit.id FROM produit JOIN categorie ON categorie.id=produit.categorie_id WHERE produit.id=11 OR produit.id=14 OR produit.id=16 OR produit.id=17 OR produit.id=20 OR produit.id=13 ORDER BY produit.nom");
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
