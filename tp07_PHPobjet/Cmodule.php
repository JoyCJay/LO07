<?php
//http://localhost/lo07_tp/tp07_PHPobjet/module.php
    class Cmodule{
        private $sigle;
        private $label;
        private $categorie;
        private $effectif;

        function __construct($sigle,$label,$categorie,$effectif){
            $this->sigle = $sigle;
            $this->label = $label;
            $this->categorie = $categorie;
            $this->effectif = $effectif;
        }

        function __tostring(){
            print("sigle:$this->sigle<br/>");
            print("label:$this->label<br/>");
            print("categorie:$this->categorie<br/>");
            print("effectif:$this->effectif<br/>");
        }

        function tostring(){
            return "sigle:$this->sigle,label:$this->label,categorie:$this->categorie,effectif:$this->effectif\n";
        }


        
        function get_sigle(){return $this->sigle;}
        function get_label(){return $this->label;}
        function get_categorie(){return $this->categorie;}
        function get_effectif(){return $this->effectif;}
        
        function set_sigle($value){$this->sigle = $value;}
        function set_label($value){$this->label = $value;}
        function set_categorie($value){$this->categorie = $value;}
        function set_effectif($value){$this->effectif = $value;}

        function save_txt($path){
            $file = fopen($path,"a+");
            $temp=$this->tostring();
            fwrite($file,$temp);
            fclose($file);
            echo "succeed to save_text in path: $path";
        }
        function show_DBR(){
            $DB_conn = mysqli_connect ('localhost','root','123456','UTT');
            $DB_result = mysqli_query($DB_conn,'select * from module;'); 
            if ($DB_result){
                echo "<pre>";
                while($temp = mysqli_fetch_array ($DB_result,MYSQLI_ASSOC)){
                $DB_arrays[]=$temp;
                }
            print_r($DB_arrays);
            echo "</pre>";
            }
            mysqli_close($DB_conn);
        }

        function save_DBR($push){
            $DB_conn = mysqli_connect ('localhost','root','123456','UTT');
            $sql_sentence = "INSERT INTO module (sigle,label,categorie,effectif)VALUES(\"$push[0]\",\"$push[1]\",\"$push[2]\",\"$push[3]\");";
            $DB_result = mysqli_query($DB_conn,$sql_sentence); 
            echo "OK, saved";            
            mysqli_close($DB_conn);
        }
    }
?>
