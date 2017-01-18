<?php

//include './sql/getCategories.php'; 
$categorie= getCategorie();
?>

<div class="list-group">
    <form>
        <fieldset>
            <legend>Catégories</legend>
    <?php 
    
   foreach ($categorie as $value) {
        
        $echo='<a href="'.$value["nom"].'.php" class="list-group-item">'.$value["nom"].'</a>';
        echo $echo;
    }
    ?>
    </fieldset>
    </form>

</div>


