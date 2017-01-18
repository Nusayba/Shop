<html>
    <head>
        <script type="text/javascript" src="js/fonction.js"></script>
    </head>
    <body>
        <script>
            function affiche(url){
        console.log("j'entre dans la page ajout produit");
        
        $.get(url, function( data ) {
                
        $("#gestionProduit").html(data);
        });
    }
        </script>
        <h1>Gestion des produits</h1>
        <a onclick="affiche('./pages/ajoutProduit.php');"><p>ajout d'un produit</p></a>
        <a onclick="affiche('./pages/supProduit.php');"><p>suppression d'un produit</p></a>
        <a onclick="affiche('./pages/modifProduit.php');"><p>modification d'un produit</p></a>
        <a onclick="affiche('./pages/afficheProduit.php');"><p>voir tous les produit</p></a>
        <div id="gestionProduit"></div>  
    </body>
</html>



