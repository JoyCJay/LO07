<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //1.un tableau associatif $hashCapitales
        $hashCapitales=array(
            "France"=>"Paris",
            "Italie"=>"Rome",
            "Belgique"=>"Bruxelles",
            "Espagne"=>"Madrid",
            "Allemagne"=>"Berlin",
            "Portugal"=>"Lisbonne"
        );
        print("<pre>");
        print_r($hashCapitales);
        print("</pre>");
        
        //2. Quelles sont les instructions qui permettent d’obtenir et d’afficher la capitale de l’Allemagne ?
        echo $hashCapitales["Allemagne"]."<br/>";
        
        //3. Que se passe-t-il si l’on ajoute le couple (France, Troyes) ? "Troyes" va couvrir/remplace "Paris" comme nouvelle capitale de Fr
        $hashCapitales["France"]="Troyes";
        print("<pre>");
        print_r($hashCapitales);
        print("</pre>"); 
        
        //4. Utilisez l'instruction foreach pour afficher le contenu du tableau associatif.
        foreach ($hashCapitales as $key_4=>$value_4){
            echo "Key=" . $key_4 . ", Value=" . $value_4."<br/>";
        }
        print("<br/>");
        //5. Utilisez des fonctions vues en cours pour construire une liste des clés et une liste des valeurs.Affichez les résultats.
        print_r(array_values($hashCapitales));
        print("<br/>");
        print_r(array_keys($hashCapitales));
        ?>
    </body>
</html>
