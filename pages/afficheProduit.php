<html>
    <head>
        <script type="text/javascript" src="js/fonction.js"></script>
    </head>
    <body>
        
        
            
        <?php

include '../sql/connexionBDD.php';


$produits=$mysql->query("SELECT produit.id, produit.nom, description, prix, nb_stock, url, categorie.nom as nom_categorie FROM produit JOIN categorie ON categorie.id=produit.categorie_id;");
$lesProduits=$produits->fetchAll();
    


echo'<div class="table-responsive"><table class="table-striped">';
echo '<tr>'
. '         <th>Id du produit</th>'
        . '<th>Nom</th>'
        . '<th>Description</th>'
        . '<th>Prix</th>'
        . '<th>Stock</th>'
        . '<th>Catégorie</th>'
   . '</tr>';


foreach ($lesProduits as $value) {
    
    echo'<tr>';
    echo '<td>'.$value['id'].'</td>';
    echo '<td>'.$value['nom'].'</td>';
    echo '<td>'.$value['description'].'</td>';
    echo '<td>'.$value['prix'].'</td>';
    echo '<td>'.$value['nb_stock'];
    echo '<td>'.$value['nom_categorie'];
   
    echo'</td>'; 
    echo'</tr>';
}

echo'</table></div>';




?>
          
    </body>
</html>
