


window.onload = function() {
    
    $("#produit").click(function(e) {
        console.log("j'entre dans la page produit");
        
        $.get("./pages/produitAdmin.php", function( data ) {
                
        $("#contain-page").html(data);
        });
    });
    
    $("#categorie").click(function(e) {
        console.log("j'entre dans la page categorie");
        $("#contain-page").load("./pages/categorieAdmin.php");
        
        });
   
    $("#commande").click(function(e) {
        console.log("j'entre dans la page commande");
        $("#contain-page").load("./pages/commandeAdmin.php");
        
        });
    
    
    
};


