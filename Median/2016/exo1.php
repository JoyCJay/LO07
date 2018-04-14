


<?php
//http://localhost/lo07_tp/Median/2016/exo1.php

//q5. liste
echo "Q5.liste";
$q5=array("lundi","mardi","vendredi");
print("<pre>");
print_r($q5);
print("</pre>");

//q6. table de hachage
 echo "Q6.table de hachage";
 $q6=array(
     "Spring Festival"=>"1.1",
     "Work Festival"=>"5.1",
     "Christmas"=>"12.25"
    );
print("<pre>");
print_r($q6);
print("</pre>");

//q7 liste de table da hachage
echo "Q7 liste de table de hachage";
$q7=array(
    array("Spring Festival"=>"1.1","Work Festival"=>"5.1","Christmas"=>"12.25"),
    array("French National Day"=>"7.14","Paque"=>"4.2")
);
print("<pre>");
print_r($q7);
print("</pre>");

//q8 table de hachage de liste
echo "Q8 table de hachage de liste";
$q8=array(
    "alphabet"=>array("a","b","c"),
    "number"=>array("1","2","3")
);
print("<pre>");
print_r($q8);
print("</pre>");
?>