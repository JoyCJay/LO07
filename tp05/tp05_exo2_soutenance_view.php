<?php
//http://localhost/lo07_tp/tp05/tp05_exo2_soutenance_view.php
    $file_handle = fopen("./exo2.csv","r");
    while(! feof($file_handle)){
        print("<pre>");
        print_r(fgetcsv($file_handle,100,","));
        print("</pre>");
    }
    fclose($file_handle);
?>