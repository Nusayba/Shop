<?php 
    include '../sql/fonction.php';
    $categorie= getCategorie(); 
?>
<form method="post" action="./sql/ajoutCategorieBDD.php">
    <fieldset>
        <legend>Ajout d'une catégorie</legend>
        <div class="col-xs-4">
        <p>Nom de la catégorie : <input type="text" id="categorie" name="categorie"></p>
        
        
        </div>
        <div class="col-xs-6">
            
            <input type="submit" value="Ajout de la catégorie" class="btn-primary">
        </div>
        
        
    </fieldset>
</form>