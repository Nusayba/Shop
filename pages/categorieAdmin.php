<html>
    <head>
        <script type="text/javascript" src="js/fonction.js"></script>
    </head>
    <body>
        <script>
            function affiche(url){
        
                $.get(url, function( data ) {
                
                    $("#gestionCategorie").html(data);
                });
            }
        </script>
        <h1>Gestion des catégories</h1>
        <a onclick="affiche('./pages/ajoutCategorie.php');"><p>ajout d'une catégories</p></a>
        <a onclick="affiche('./pages/supCategorie.php');"><p>suppression d'une catégories</p></a>
        <a onclick="affiche('./pages/modifCategorie.php');"><p>modification d'une catégories</p></a>
        <a onclick="affiche('./pages/afficheCategorie.php');"><p>voir toutes les catégories</p></a>
        <div id="gestionCategorie"></div>  
    </body>
</html>