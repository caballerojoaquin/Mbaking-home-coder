<?php

    class Coche {
        private $color;
        private $potencia;
        private $marca;
        //private $price;
        private $puertas = 2;
    
        
        public function __construct($color, $potencia, $marca){
            $this->color = $color;
            $this->potencia = $potencia;
            $this->marca = $marca;
            //$this->price = $price;
            

        }

        private function sayColor(){
            return "El color es " . $this->color;
        }

        public function sayDescription(){
            return " Marca: " . $this->marca . ". " . " Color: " . $this->color . " con una potencia promedio de " . $this->potencia . "km/h ." .
                "Con el confort de " . $this->puertas . " puertas. ";// . "Y un valor de $" . $this->price;
        }

    }
    class CocheDeLujo extends Coche{
        private $costo = 45;

        public function __construct($costo){
            parent::__construct("Rojo",345,Ford);
            $this->costo = $costo;

        }

        public function sayCost(){
            return $this->sayDescription() . " y cuesta $" . $this->costo;
        }

        public function setCosto($costo){
            if($costo >0){
                $this->costo = $costo;
            } else{
                $this->costo=0;
            };
        }
        public function getCosto(){
            return $this->costo;
        }
    }

  
    $volvo = new CocheDeLujo();

    echo $volvo->sayCost();
    //echo $bmw->sayDescription();



    /*     $bmw->color = "Azul";
    $bmw->potencia = 230;
    $bmw->marca = "BMW";
    //$bmw->setCosto(45000) */; 





    /*
    
    
    //función estatica

    class Person {

        public $name;

        public static function sayName($name){
            echo "Hola " . $name;
        }
    }
 
    $person = new Person();
    //$person->name= "Pedro";
    Person:: sayName("Roberto");


    



/* 

    function hi ($name){
    return " <br> Hola " . $name;
    }

    $sayMayName = hi("Tomas");
    
    echo hi("Tomas"); */

?>