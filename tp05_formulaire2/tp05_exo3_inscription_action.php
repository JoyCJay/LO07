<?php
//http://localhost/lo07_tp/tp05_formulaire2/tp05_exo3_inscription_action.php
    $file_handle = fopen("./exo3.csv","r");
    while(! feof($file_handle)){
        print("<pre>");
        print_r(fgetcsv($file_handle,100,","));
        print("</pre>");
    }
    fclose($file_handle);
?>