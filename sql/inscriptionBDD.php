<?php
    include '../../connexionBDD.php';

    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $pseudo=$_GET['pseudo'];
    $email=$_GET['email'];
    $password=$_GET['password'];
    $adresse=$_GET['adresse'];
    
    $emailBDD=$mysql->query("SELECT sa_client.email FROM sa_client WHERE sa_client.email='$email'");
    $lEmailBDD=$emailBDD->fetchAll();
    $lTab= sizeof($lEmailBDD);
    
    if(!$lTab==0){
        ?><script>alert('Vous êtes déjà inscrit avec cette email !');</script><?php
    }else{
        $pseudoBDD=$mysql->query("SELECT sa_client.pseudo FROM sa_client WHERE sa_client.pseudo='$pseudo'");
        $lePseudoBDD=$pseudoBDD->fetchAll();
        $lTab= sizeof($lePseudoBDD); 
        
        if(!$lTab==0){
            ?><script>alert('Ce pseudo existe déjà, veuillez en choisir un autre.');</script><?php
        }else{
            $mysql->query("INSERT INTO sa_client(nom, prenom, adresse, email, pseudo, password) VALUES ('$nom','$prenom','$adresse','$email','$pseudo','$password');");
            ?>
                <h1>Inscription réussie</h1>
                <p>Votre inscription c'est déroulé avec succès. Vous pouvez dès à présent vous connecter avec votre pseudo.</p>
                
            <?php
        }
    }

?>
