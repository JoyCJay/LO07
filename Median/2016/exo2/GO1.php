<?php
    $_GET['organisation']="UTT";
    $_GET['programme']="ISI";
    $_GET['GO1']="GO1";
    print("<h1>Traitement du formulaire mystere</h1>");
    print('<h2>$_GET</h2>');
    if (isset($_GET['Nom'])){
        print("<ul>");
        foreach($_GET as $key=>$value){
            print("<li>".$key." : ".$value."</li>");
        }
        print("</ul>");
    }
?>