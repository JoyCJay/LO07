<?php
    print("<pre>");
    print_r($_POST);
    print("</pre>");

    print("<ul>");
    foreach($_POST as $key=>$value){
        print("<li>");
        print("Key:"."$key"."  value:"."$value");
        print("</li>");
    }
    print("</ul>");
    
?>