<html>
    <head>
        
        <script>
            function afficheProduit(categorie){
        console.log("j'entre dans affiche produit");
        $.get("./pages/produitCategorie.php",{cat : categorie}, function( data ) {
                
        $("#contain-page").html(data);
        });
    }
        </script>
         
    </head>
    <body>
       <?php


$categorie= getCategorie();
?>

<div class="list-group">
    <form>
        <fieldset>
            <legend>Catégories</legend>
    <?php 
    
   foreach ($categorie as $value) {
        $cat=$value["nom"];
        
        $echo='<a  onclick="afficheProduit(\''.$cat.'\');" class="list-group-item">'.$cat.'</a>';
        echo $echo;
    }
    ?>
    </fieldset>
    </form>

</div> 
    </body>
</html>




