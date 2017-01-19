<?php
include 'connexionBDD.php';
session_start();

$login=$_POST['user'];
$pwd=$_POST['pwd'];

$sql="SELECT * FROM client WHERE pseudo='".$login."';";
$user=$mysql->query($sql);
$utilisateur=$user->fetchAll();



if($utilisateur==true){
    
    if($utilisateur[0]['password']==$pwd){
        
        $_SESSION['loginShop']=$login;
        $_SESSION['id_client']=$utilisateur[0]['id'];
        ?><script>
            document.location.replace('../index.php');
        </script><?php
    }else{
        ?><script>alert('mauvais mot de passe');
            document.location.replace('../index.php');
        </script><?php
    }
}else{
   ?><script>alert('mauvais user');
       document.location.replace('../index.php');
   </script><?php
}




?>



