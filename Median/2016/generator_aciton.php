<?php 
//http://localhost/lo07_tp/Median/2016/generator_aciton.php
function hello(){
    echo "hello";
}

function form_debut($name,$method,$action){
    print("<form name='generator' method=$method>");
    print("<fieldset>");
    print("<legend>Formulaire</legend>");
    print("<label for='fname'>Name</label>");
    print("<input type='text' name='fname' value=$name><br/>");
    print("<label for='fmethod'>Method</label>");
    print("<input type='text' name='fmethod' value=$method><br/>");
    print("<label for='faction'>Action</label>");
    print("<input type='text' name='faction' value=$action><br/>");

    print("</fieldset>");
}
function form_input($for,$name,$type,$value){
    print("<fieldset>");
    print("<legend>Champ input</legend>");
    print("<label for=$for>$name</label>");
    print("<input type=$type name=$for value=$value><br/>");
    print("</fieldset>");
}
function form_fin(){
    print("<input type='submit' value='Go1' action='#'>");
    print("</form>");
}
function form_select($for,$name,$chaine){
    print("<fieldset>");
    print("<legend>Champ select</legend>");
    print("<lable for=$for>$name</label>");
    print("<select name=$for>");
    $temp_array=explode(";",$chaine);
    foreach($temp_array as $elem){
        print("<option value=$elem>$elem</option>");
    }
    print("</select>");
    print("</fieldset>");
}


form_debut("hello","post","#");

form_input("iname","NName","text","ISI/isi");
form_input("itype","TType","text","PASSWORD");
form_input("iemail","EEmail","email","joycjay@163.com");

form_select("sname","module","LO07;NF16;GL02;NF19;IF26");

form_fin();

if(isset($_POST['fname'])){
    print("<pre>");
    print_r($_POST);
    print("</pre>");
}
?>