<?php


?>

<div>
    
    <?php 
        if (!isset($_SESSION['loginShop'])) {
    ?>
       <form method="post" action="./sql/creaSession.php">
        <fieldset>
            <legend>Connexion</legend>
        
        <p>
            User : <br/>
            <input type="text" id="user" name="user">
        </p>
        <p>Mot de passe : <br/>
            <input type="password" id="pwd" name="pwd">
        </p>
        <input type="submit" value="Connexion" class="btn-primary">
        </fieldset>
    </form> 
    <?php
        }else{
    ?>
        <form method="post" action="./sql/supSession.php">
        <fieldset>
            <legend>Deconnexion</legend>
        
        <input type="submit" value="Deconnexion" class="btn-primary">
        </fieldset>
    </form> 
    <?php
        }
    ?>
    
</div>