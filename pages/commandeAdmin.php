<html>
    <head>
        <script type="text/javascript" src="js/fonction.js"></script>
    </head>
    <body>
        
        <h1>Gestion des commandes</h1>
            
        <?php

include '../sql/connexionBDD.php';


$commandes=$mysql->query("SELECT commande.id, commande.date, client.nom, client.prenom, commande.etat FROM commande JOIN client ON client.id=commande.client_id;");
$lesCommandes=$commandes->fetchAll();
    


echo'<div class="table-responsive"><table class="table-striped">';
echo '<tr>'
. '         <th>Id de la commande</th>'
        . '<th>Date</th>'
        . '<th>Nom du client</th>'
        . '<th>Prénom du client</th>'
        . '<th>Etat de la commande</th>'
   . '</tr>';


foreach ($lesCommandes as $value) {
    
    echo'<tr>';
    echo '<td>'.$value['id'].'</td>';
    echo '<td>'.$value['date'].'</td>';
    echo '<td>'.$value['nom'].'</td>';
    echo '<td>'.$value['prenom'].'</td>';
    echo '<td>'.$value['etat'];
    if($value['etat']=="payer"){
        echo' <input type="button" value="Expédier" class="btn-primary" onclick="$(\'#contain-page\').load(\'./sql/expedier.php\', { idCommande: '.$value['id'].'} )">';
    }
    echo'</td>'; 
    echo'</tr>';
}

echo'</table></div>';




?>
          
    </body>
</html>
