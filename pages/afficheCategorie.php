<html>
    <head>
        <script type="text/javascript" src="js/fonction.js"></script>
    </head>
    <body>
        
        
            
        <?php

include '../../connexionBDD.php';


$categories=$mysql->query("SELECT id, nom FROM sa_categorie");
$lesCategories=$categories->fetchAll();
    


echo'<div class="table-responsive"><table class="table-striped">';
echo '<tr>'
. '         <th>Id de la catégorie</th>'
        . '<th>Nom de la catégorie</th>'
       
   . '</tr>';


foreach ($lesCategories as $value) {
    
    echo'<tr>';
    echo '<td>'.$value['id'].'</td>';
    echo '<td>'.$value['nom'].'</td>';
   
   
    echo'</td>'; 
    echo'</tr>';
}

echo'</table></div>';




?>
          
    </body>
</html>
