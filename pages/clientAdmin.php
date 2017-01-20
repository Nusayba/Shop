<html>
    <head>
        <script type="text/javascript" src="js/fonction.js"></script>
    </head>
    <body>
        <script>
            function affiche(url){
        
                $.get(url, function( data ) {
                
                    $("#gestionClient").html(data);
                });
            }
        </script>
        <h1>Gestion des clients</h1>
        <a onclick="affiche('./pages/ajoutClient.php');"><p>ajout d'un client</p></a>
        <a onclick="affiche('./pages/supClient.php');"><p>suppression d'un client</p></a>
        <a onclick="affiche('./pages/modifClient.php');"><p>modification d'un client</p></a>
        <a onclick="$('#gestionCategorie').load('./pages/afficheClient.php');"><p>voir tous les clients</p></a>
        <div id="gestionCategorie"></div>  
    </body>
</html>