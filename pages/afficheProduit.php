<html>
    <head>
        <script type="text/javascript" src="js/fonction.js"></script>
    </head>
    <body>
        
        
            
        <?php

include '../../connexionBDD.php';


$produits=$mysql->query("SELECT sa_produit.id, sa_produit.nom, description, prix, nb_stock, url, sa_categorie.nom as nom_categorie FROM sa_produit JOIN sa_categorie ON sa_categorie.id=sa_produit.categorie_id;");
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
