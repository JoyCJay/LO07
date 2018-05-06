<?php
//http://localhost/lo07_tp/tp07/module.php
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


    }
?>
