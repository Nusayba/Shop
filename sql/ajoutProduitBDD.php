<html>
    <head>
       
        <script src="../js/jquery.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
include '../../connexionBDD.php';

$nom=$_POST['nom'];
$description=$_POST['description'];
$prix= floatval($_POST['prix']) ;
$categorie=intval($_POST['categorie']);
$nb_stock= intval($_POST['nb_stock']) ;
$url= $_POST['url'] ;

$mysql->query("INSERT INTO sa_produit (nom, description, prix, nb_stock, url, categorie_id) VALUES ('$nom','$description','$prix',$nb_stock,'$url',$categorie)");



?>
        <script>
            
            document.location.replace('../index.php');
            
            alert('produit ajouté');
           
</script>
    </body>
</html>


