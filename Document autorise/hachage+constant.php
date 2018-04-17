<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            define('PRENOM', 'chengjie');
            define('NOM', 'ZHANG');
            define('AGE', '22');
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
        
        //3. Que se passe-t-il si l’on ajoute le couple (France, Troyes)? 
        //"Troyes" va couvrir/remplacer "Paris" comme nouvelle capitale de Fr
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
        //字符串转换成关联数组
        print("<br/>");
        $str="prof=lemercier,cours=web,salle=A002,date=09/03/2016,cours=php";
        $table=explode(',', $str);
        print_r($table); print("<br/>");
        $table_hachage=array();
        foreach($table as $elem){
            $temp=explode('=',$elem);
            $table_hachage[$temp[0]]=$temp[1];
        }
        print_r($table_hachage);print("<br/>");
        ?>

        <ul type="square">
	    <li>
            <?php 
                echo PRENOM; 
            ?>
	    </li>
        </ul>

    </body>
</html>
