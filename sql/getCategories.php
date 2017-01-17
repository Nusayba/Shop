<?php

$sql="SELECT nom FROM categorie ORDER BY id;";
$categories=$mysql->query($sql);
$lesCategories=$categories->fetchAll();


?>

