<?php
//introduccion a php orientado a objetos

class Color{
    public $remera;
    public $gorra;
    
    //metodo
    public function Ropa(){
        echo "<p>Ropa de color Remera: $this->remera Gorra: $this->gorra</p>";
    }
}

//instanciar
$a= new Color();
$a-> remera = "roja";
$a-> gorra = "blanca";
$a->Ropa();


?>