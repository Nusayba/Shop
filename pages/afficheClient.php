<html>
    <head>
        <script type="text/javascript" src="js/fonction.js"></script>
    </head>
    <body>
        
        
            
        <?php

include '../../connexionBDD.php';


$clients=$mysql->query("SELECT id, nom, prenom, adresse, email, pseudo FROM sa_client");
$lesClients=$clients->fetchAll();
    


echo'<div class="table-responsive"><table class="table-striped">';
echo '<tr>'
. '         <th>Id du client</th>'
        . '<th>Nom</th>'
        . '<th>Prénom</th>'
        . '<th>Adresse</th>'
        . '<th>Email</th>'
        . '<th>Pseudo</th>'
       
   . '</tr>';


foreach ($lesClients as $value) {
    
    echo'<tr>';
    echo '<td>'.$value['id'].'</td>';
    echo '<td>'.$value['nom'].'</td>';
    echo '<td>'.$value['prenom'].'</td>';
   echo '<td>'.$value['adresse'].'</td>';
   echo '<td>'.$value['email'].'</td>';
   echo '<td>'.$value['pseudo'].'</td>';
   
    
    echo'</tr>';
}

echo'</table></div>';




?>
          
    </body>
</html>
