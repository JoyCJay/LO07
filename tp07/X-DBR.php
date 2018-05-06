<?php
    class Mysql{
        private $dbhost;
        private $dbpass;

        function create_DBR(){
            $conn = mysqli_connect('localhost','root',$dbpass);
            if(! $conn ){
                die('Connect error: ' . mysqli_error($conn));
            }
            echo 'succeed to connect<br />';
            $sql = 'CREATE DATABASE RUNOOB';
            $retval = mysqli_query($conn,$sql );
            if(! $retval ){
                die('fail to create DB: ' . mysqli_error($conn));
            }
            echo "succeed to create DB\n";
            //mysqli_close($conn);
        }

        function save_BDR(){
            $maBase = mysqli_connect (localhost, user, password, dbase);
        }
    }
/*
CREATE TABLE IF NOT EXISTS `module`(
     `sigle` VARCHAR(10), 
     `label` VARCHAR(25), 
     `categorie` VARCHAR(5), 
     `effectif` INT UNSIGNED, 
     PRIMARY KEY (`sigle`) 
);

INSERT INTO module (sigle,label,categorie,effectif)VALUES('LO12','web','CS','150');
*/

?>
