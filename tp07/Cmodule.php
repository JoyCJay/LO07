<?php
////http://localhost/lo07_tp/tp07/module.php
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
            echo "$this";
            print("sigle:$this->sigle<br/>");
            print("label:$this->label<br/>");
            print("categorie:$this->categorie<br/>");
            print("effectif:$this->effectif<br/>");
        }

    }

    $color='red';
?>