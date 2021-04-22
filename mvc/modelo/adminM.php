<?php
require_once "conexion.php";

class AdminM extends Conexion{
    static public function IngresoM($datosC, $tablaBD){
        $pdo = Conexion::connect()->prepare("SELECT usuario, clave FROM $tablaBD WHERE usuario = :usuario");
        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
        $pdo -> execute();
        return $pdo->fetch();
        //$pdo -> close();
    }
}



?>