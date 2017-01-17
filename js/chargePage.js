


window.onload = function() {
    
    $("#produit").click(function(e) {
        console.log("j'entre dans la page produit");
        
        $.get("./pages/produitAdmin.php", function( data ) {
                
        $("#contain-page").html(data);
        });
    });
};


