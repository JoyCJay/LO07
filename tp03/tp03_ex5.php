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
         $str="prof=lemercier,cours=web,salle=A002,date=09/03/2016,cours=php";
         $table=explode(',', $str);
         print_r($table);
        ?>
    </body>
</html>
