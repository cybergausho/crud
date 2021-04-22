<?php
require_once "conexion.php";
//registrar usuario
class EmpleadoM extends Conexion{
    static public function RegistrarEmpleadoM($datosC, $tablaBD){
        $pdo= Conexion::connect()->prepare("INSERT INTO $tablaBD (nombre, apellido, email, puesto, salario) VALUES (:nombre, :apellido, :email, :puesto, :salario)");
        $pdo-> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo-> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
        $pdo-> bindParam(":email", $datosC["email"], PDO::PARAM_STR);
        $pdo-> bindParam(":puesto", $datosC["puesto"], PDO::PARAM_STR);
        $pdo-> bindParam(":salario", $datosC["salario"], PDO::PARAM_STR);
        if ($pdo ->execute()){
            return "Correcto";
        }else{
            return "Error al registrar";
        }
        //$pdo-> close();
    }
//mostrar empledaos
static public function MostrarEmpleadosM($tablaBD){
    $pdo = Conexion::connect()->prepare("SELECT id, nombre, apellido, email, puesto, salario FROM $tablaBD");
    $pdo -> execute();
    return $pdo -> fetchAll();
    //$pdo->close();
}

//editar empleado
static public function EditarEmpleadoM($datosC, $tablaBD){
    $pdo = Conexion::connect()->prepare("SELECT id, nombre, apellido, email, puesto, salario FROM $tablaBD WHERE id=:id");
    $pdo-> bindParam(":id", $datosC, PDO::PARAM_INT);
    $pdo->execute();
    return $pdo->fetch();
    //$pdo->close();
} 

//actualizar empleado
static public function ActualizarEmpleadoM($datosC, $tablaBD){
    $pdo = Conexion::connect()->prepare("UPDATE $tablaBD SET nombre = :nombre, apellido =:apellido, email=:email, puesto = :puesto, salario=:salario WHERE id=:id");
    $pdo-> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
    $pdo-> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
    $pdo-> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
    $pdo-> bindParam(":email", $datosC["email"], PDO::PARAM_STR);
    $pdo-> bindParam(":puesto", $datosC["puesto"], PDO::PARAM_STR);
    $pdo-> bindParam(":salario", $datosC["salario"], PDO::PARAM_STR);
    if ($pdo ->execute()){
        return "Correcto";
    }else{
        return "Error al actualizar";
    }
    //$pdo-> close();
}

//borrar empleado
static public function BorrarEmpleadoM($datosC, $tablaBD){
    $pdo = Conexion::connect()->prepare("DELETE FROM $tablaBD WHERE id=:id");
    $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);
    if ($pdo ->execute()){
        return "Correcto";
    }else{
        return "Error al actualizar";
    }
    //$pdo-> close();
}

}


?>