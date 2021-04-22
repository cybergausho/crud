<?php

class EmpleadoC{
    //registrar empleado
    public function RegistrarEmpleadoC(){
        if(isset($_POST["nombreR"])){
            $datosC = array("nombre"=>$_POST["nombreR"], "apellido"=>$_POST["apellidoR"], "email"=>$_POST["emailR"], "puesto"=>$_POST["puestoR"], "salario"=>$_POST["salarioR"]);
            $tablaBD = "empleados";
            $respuesta = EmpleadoM::RegistrarEmpleadoM($datosC, $tablaBD);
            if($respuesta == "Correcto"){
                header("location:index.php?ruta=empleados");
            }else {
                echo "error";
            }
        }
    }

    //mostrar empleados
    public function MostrarEmpleadosC(){
        $tablaDB = "empleados";
        $respuesta = EmpleadoM::MostrarEmpleadosM($tablaDB);
        foreach ($respuesta as $indice => $valor){
            echo '<tr>
            <td>'.$valor["nombre"].'</td>
            <td>'.$valor["apellido"].'</td>
            <td>'.$valor["email"].'</td>
            <td>'.$valor["puesto"].'</td>
            <td>'.$valor["salario"].'</td>
            <td><a href="index.php?ruta=editar&id='.$valor["id"].'"><button>Editar</button></td>
            <td><a href="index.php?ruta=empleados&idB='.$valor["id"].'"><button>Borrar</button></td>
        </tr>';

    }

}

//Editar empleado
public function EditarEmpleadoC(){
    $datosC = $_GET["id"];
    $tablaDB = "empleados";
    $respuesta = EmpleadoM::EditarEmpleadoM($datosC, $tablaDB);
    echo '<input type="hidden" value='.$respuesta["id"].' name="idE" required>

    <input type="text" placeholder="Nombre" " value='.$respuesta["nombre"].' name="nombreE" required>

    <input type="text" placeholder="Apellido" " value='.$respuesta["apellido"].' name="apellidoE" required>

    <input type="email" placeholder="Email" " value='.$respuesta["email"].' name="emailE" required>

    <input type="text" placeholder="Puesto" " value='.$respuesta["puesto"].' name="puestoE" required>

    <input type="text" placeholder="Salario"" value='.$respuesta["salario"].'  name="salarioE" required>

    <input type="submit" value="Actualizar">
    ';

}

//actualizar empleado
    public function ActualizarEmpleadoC(){

        if(isset($_POST["nombreE"])){
            $datosC = array( "id"=>$_POST["idE"], "nombre"=>$_POST["nombreE"], "apellido"=>$_POST["apellidoE"],"email"=>$_POST["emailE"],"puesto"=>$_POST["puestoE"], "salario"=>$_POST["salarioE"]);
            $tablaBD = "empleados";
            $respuesta = EmpleadoM::ActualizarEmpleadoM($datosC, $tablaBD);
            if($respuesta == "Correcto"){
                header("location:index.php?ruta=empleados");
            }else {
                echo "error";
            }
        }

    }

//eliminar empleado
public function BorrarEmpleadoC(){
    if(isset($_GET["idB"])){
        $datosC = $_GET["idB"];
        $tablaBD = "empleados";
        $respuesta = EmpleadoM::BorrarEmpleadoM($datosC, $tablaBD);
        if($respuesta == "Correcto"){
            header("location:index.php?ruta=empleados");
        }else {
            echo "error";
        }
    }
    }    
}




?>