<?php

class Animal{
    public $numeroPatas;
    public $numeroAlas;
    public $tipoAnimal;

    public function clasificacion($numeroPatas,$numeroAlas,$tipoAnimal){
        if($numeroPatas == 4 and $numeroAlas == 0 and $tipoAnimal == "caballo" or $tipoAnimal == "Caballo"){
            return "<h2 id='bien'>EL animal es un Caballo</h2>";
        }else if($numeroPatas == 2 and $numeroAlas == 2 and $tipoAnimal == "Pato" or $tipoAnimal == "pato"){
            return "<h2 id='bien'>EL animal es un Pato</h2>";
        }else if($numeroPatas == 2 and $numeroAlas == 2 and $tipoAnimal == "Paloma" or $tipoAnimal == "paloma"){
            return "<h2 id='bien'>El animal es una Paloma</h2>";
        }else{
            return "<h2 id='error'>Es otro Tipo de animal</h2>";
        }
    }
}

 
?>