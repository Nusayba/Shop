<?php
    $categorie= getCategorie();
?>

<div>
    <form id="formFiltre">
        <fieldset>
            <legend>Recherche</legend>
        
        <p>
            <input type="text" id="recherche" name="recherche">
        </p>
        <p>Filtrer par catégorie : <br/>
            <select name="categorie">
            <?php 
            
                foreach ($categorie as $value) {
        
                    $option='<option value="'.$value["nom"].'">'.$value["nom"].'</option>';
                    echo $option;
                }
            ?>
         
            </select>
        </p>
        
        <input type="button" value="Lancer la recherche" class="btn-primary" onclick='$("#contain-page").
                    load("./pages/produitCategorie.php", $("#formFiltre").serialize());'>
        </fieldset>
    </form>
</div>

