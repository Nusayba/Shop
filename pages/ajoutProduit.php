<?php 
    include '../sql/fonction.php';
    $categorie= getCategorie(); 
?>
<form method="post" action="./sql/ajoutProduitBDD.php">
    <fieldset>
        <legend>Ajout d'un produit</legend>
        <div class="col-xs-4">
        <p>Nom du produit : <input type="text" id="nom" name="nom"></p>
        
        <p>Prix unitaire : <input type="number"  id="prix" name="prix"></p>
        <p>Quantité en stock : <input type="number" min="0" id="nb_stock" name="nb_stock"></p>
        <p>Catégorie : <select name="categorie" id="categorie">
            <?php 
            
                foreach ($categorie as $value) {
        
                    $option='<option value="'.$value["id"].'">'.$value["nom"].'</option>';
                    echo $option;
                }
            ?>
         
            </select></p>
        </div>
            <div class="col-xs-6">
        <p>Description : <textarea class="form-control" rows="5" id="description" name="description"></textarea></p>
        <input type="submit" value="Ajout du produit" class="btn-primary">
        </div>
        
        
    </fieldset>
</form>