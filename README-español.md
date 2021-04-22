# CRUD MVC

_Crud MVC curso Udemy_

### Pre-requisitos 📋

_Servidor web APACHE
MySQL o MariaDB
PHPMyAdmin
PHP =<7.1
Navegador web_

### Instalación 🔧

_Descargar el proyecto en una carpeta a la que tenga acceso el servidor
ej:
/xampp/htdocs 
/var/www/html
etc...

Iniciar el servidor web, iniciar MySQL y dirigirse a PHPMyAdmin

127.0.0.1/PHPMyadmin_

_Aqui iniciar sesion y crear una base de datos llamada crud e importamos la base de datos._


_Para configurar la conexion a la base de datos debemos dirigirnos a:_

```
Modelo/conexion.php
```


## Ejecutando las pruebas ⚙️

_Nos dirigimos a la direccion del sistema
127.0.0.1/crud_

```
El usuario por defecto es admin
La contraseña por defecto es 123
```

### Descripcion del MVC ⌨️

_MVC es un tipo de diseño, el cual consiste en un desarrollo en capas_

```
CAPAS:
Modelo Vista Controlador
```
_Modelo: Resposable de la logica y conexion a base de datos.
Controlador: Gestionar peticiones del usuario y procesa llamados al MODELO y las presenta en las VISTAS.
Vista: Responsable de mostrar al usuario el resultado del modelo a traves del controlador._


### Agregar nuevas funcionalidades

_Una vez definida y diagramada la funcionalidad que queremos incorporar, respetando la arquitectura de desarrollo que poseemos, se deben seguir los siguientes pasos:
Declarar la ruta como valida en_

```
modelo/RutasM.php

```
_Crear la vista_

```
vistas/modulo/nuevo.php
```
_En la misma, dentro de la estrucutra html, donde el sistema tendra funcionalidad, debemos instanciar el controlador a definir_

```
ej:
$admin= new AdminC(); //instanciamos la clase
$admin-> MostrarEmpleadoC(); //llamamos a la funcion que deseamos incorporar
```

_Controlador
Como ya definimos anteriormente, en la clase AdminC procedemos a definir la funcion MostrarEmpleadoC();
Aqui debemos decirle que esperamos de esta funcion, y si se requiere una logica, definir la clase y funcion del modelo_
```
ej:
    public function MostrarEmpleadosC(){
        $tablaDB = "administradores"; //base de datos a conector
        $respuesta = AdminM::MostrarEmpleadosM($tablaDB); //variable con la respuesta que esperamos del modelo, clase del modelo y su funcion
        foreach ($respuesta as $indice => $valor){
            echo '<tr>
            <td>'.$valor["usuario"].'</td>
            <td>'.$valor["clave"].'</td>
        </tr>';

    }
    }
```

_Modelo 
Realizamos las consultas a la base de datos y devolvemos los datos solicitados_
```
static public function MostrarEmpleadosM($tablaBD){
    $pdo = Conexion::connect()->prepare("SELECT id, usuario, clave FROM $tablaBD"); //instanciamos la clase Conexion
    $pdo -> execute(); //ejecutamos
    return $pdo -> fetchAll(); 
}
```

_Listo! con esto hemos presentado una nueva funcionalidad, en este caso, listar los administradores._



Saludos!

