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
        <h1>contact_action</h1>
        <?php
        /*
        3.capable de récupérer les valeurs des éléments du formulaire (nom, prénom, email, 
         login, mot de passe) et de les afficher dans la page HTML résultat.
        4.Testez votre script sur le serveur dev-isi.utt.fr.
        */
        echo "Nom:".$_GET ["nom"]."<br>";
        echo "Preom:".$_GET ["prenom"]."<br>";
        echo "Tel:".$_GET ["tel"]."<br>";
        echo "Email:".$_GET ["email"]."<br>";
        //5.Que se passe-t-il si un élément du formulaire n'est pas rempli par le visiteur ?
        //Null空值
        //6. Que se passe-t-il si un élément du formulaire ne dispose pas de l'attribut name ?
        //超全局变量(SuperGlobales)$_GET []里就没有这个元素
        if (isset($_GET["email"])){
            $email_valide= filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);
            if ($email_valide === FALSE){
                echo "_GET[email] n'est pas un email valide\n";
            }
            else
                echo "$_GET[email] est un email valide\n";
         }
        ?>
    </body>
</html>






