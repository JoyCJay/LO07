<?php
    $_POST['organisation']="UTC";
    $_POST['programme']="GI";
    $_POST['GO2']="GO2";
    unset($_POST['Nom']);
    unset($_POST['Prenom']);
    print("<h1>Traitement du formulaire mystere</h1>");
    print('<h2>$_POST</h2>');
    print("<ul>");
    foreach($_POST as $key=>$value){
        print("<li>".$key." : ".$value."</li>");
    }
    print("</ul>");
?>