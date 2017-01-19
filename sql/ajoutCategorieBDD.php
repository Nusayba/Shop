<html>
    <head>
       
        <script src="../js/jquery.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
include 'connexionBDD.php';

$nomCategorie=$_POST['categorie'];


$mysql->query("INSERT INTO categorie (nom) VALUES ('$nomCategorie')");



?>
        <script>
            
            document.location.replace('../index.php');
            
            alert('catégorie ajoutée');
           
</script>
    </body>
</html>