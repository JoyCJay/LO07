<?php
include 'Cmodule.php';
//http://localhost/lo07_tp/tp07_PHPobjet/main.php


$uv = new Cmodule($_POST['sigle'],$_POST['label'],$_POST['categorie'],$_POST['effectif']);

//$uv->save_txt("./module.txt");
$push = array($_POST['sigle'],$_POST['label'],$_POST['categorie'],$_POST['effectif']);
$uv->save_DBR($push);
?>