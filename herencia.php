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

    $bmw = new Coche("BMW", "Rojo", 343);

    echo $bmw->sayDescription();
?>