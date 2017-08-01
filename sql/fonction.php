<?php

//$sql="SELECT nom FROM categorie ORDER BY id;";
//$categories=$mysql->query($sql);
//$lesCategories=$categories->fetchAll();

function getCategorie() {
    include '../connexionBDD.php';
    $sql="SELECT nom, id FROM sa_categorie ORDER BY id;";
    $categories=$mysql->query($sql);
    $lesCategories=$categories->fetchAll();
    return $lesCategories;
}


?>

