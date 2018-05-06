<?php
include 'Cmodule.php';
//http://localhost/lo07_tp/tp07/main.php


$uv = new Cmodule($_POST['sigle'],$_POST['label'],$_POST['categorie'],$_POST['effectif']);

//$uv->save_txt("./module.txt");
$DB_conn = mysqli_connect ('localhost','root','123456','UTT');
$DB_result = mysqli_query($DB_conn,'select * from module;'); 
if ($DB_result){
    echo "<pre>";
    while($temp = mysqli_fetch_array ($DB_result,MYSQLI_ASSOC)){
    $DB_arrays[]=$temp;
    }
    print_r($DB_arrays);
    echo "</pre>";
}

mysqli_close($DB_conn);
?>