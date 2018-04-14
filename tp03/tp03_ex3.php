<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

https://dev-isi.utt.fr/~zhangch2/tp03/tp03_ex3.php

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //1.contenant un tableau $tabCapitalesUSA
        $tabCapitalesUSA=array("Montgomery","Raleigh","Tallahassee","Atlanta","Topeka","Augusta","Albany","Nashville");
        
        //2.Ajoutez la ville de Boston à la fin du tableau tabCapitalesUSA
        $tabCapitalesUSA[]="Boston";
        
        //3. Supprimez la ville d’Atlanta dans le tableau (utiliser unset et array_values).
        //unset($tabCapitalesUSA[3]);
        //$tabCapitalesUSA = array_values($tabCapitalesUSA);
        /* $array = array(0 => "a", 1 => "b", 2 => "c");
         * ①.unset($tarray[1]);                                        按键不保持索引,配合array_values()函数可以达到索引连续的效果
         * ②.array_splice($array, 1, 1);                               按键删除一个元素，不保持索引
         * ③.$array = array_diff($array, ["a", "c"]);                  按值删除多个元素，保持索引
         * ④.$array = array_diff_key($array, [0 => "xy", "2" => "xy"]);按键删除多个元素，保持索引,只留下 1 =>"b"
        */
        ?>
        
        <pre>
        <?php
        //4. Affichez ce tableau en utilisant la fonction print_r() dans une balise <pre>
        print_r($tabCapitalesUSA);
        ?>
        </pre>
        <br/>
        <?php
        //5. Même chose à l’aide d'une boucle foreach.
        foreach ($tabCapitalesUSA as $key=>$value){
            if ($value === "Atlanta")
            unset($tabCapitalesUSA[$key]);
        }
        
        //6. Même chose en utilisant la fonction implode().
        
        //7. Affichez le 3ème élément du tableau.
        echo "le 3ème élément du tableau: ".$tabCapitalesUSA[2].'<br/>';
        //8. Affichez le nombre d’éléments du tableau.
        echo "nombre d'élément: ".count($tabCapitalesUSA);
        ?>
        <br/>
        <?php
        //9. Affichez les éléments triés dans l'ordre alphabétique.
        sort($tabCapitalesUSA);
        print_r($tabCapitalesUSA);
        ?>
    </body>
</html>
