<?php

class Conexion{
    public function connect(){
        //pdo params= host, nombre bd, 2 usuario bd y 3 clave bd
        $bd= new PDO("mysql:host=localhost;dbname=crud","root", "");
        return $bd;
    }
}
/*
host: localhost
nombre bd: crud
usuario: root
contraseña: ""
*/

?>