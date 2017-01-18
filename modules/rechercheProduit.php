<?php
    $categorie= getCategorie();
?>

<div>
    <form>
        <fieldset>
            <legend>Recherche</legend>
        
        <p>
            <input type="text" id="recherche" name="recherche">
        </p>
        <p>Filtrer par catégorie : <br/>
            <select>
            <?php 
            
                foreach ($categorie as $value) {
        
                    $option='<option>'.$value["nom"].'</option>';
                    echo $option;
                }
            ?>
         
            </select>
        </p>
        
        <input type="submit" value="Lancer la recherche" class="btn-primary">
        </fieldset>
    </form>
</div>

