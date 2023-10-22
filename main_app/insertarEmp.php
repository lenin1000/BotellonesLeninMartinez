<?php

$mysqli= mysqli_connect('localhost', 'id21439394_root', 'Gene$i$1802%', 'id21439394_botellones');

if(isset($_POST['action1'])){


    if($_POST['action1']=="Insertar"){

        insertarEmp();

    }


}


function insertarEmp(){

    
    global $mysqli;

    $cedulaIN=$_POST['insertarCedula'];

    $nombreIN= $_POST['insertarNombre'];

    $rolIN= $_POST['insertarRol'];

    $contrasenaIN= $_POST['insertarContrasena'];

    if(empty($cedulaIN) || empty($nombreIN) || empty($rolIN) || empty($contrasenaIN)){

        echo "Rellene todos los campos ";
    
        exit;
    }

    $usuarios= mysqli_query($mysqli, "SELECT id_Empleado 
    FROM empleados 
    WHERE cedula= '$cedulaIN'");

    if(mysqli_num_rows($usuarios)>0){


        echo "La cédula del usuario ya existe en el sistema";

    }else{

    $usuarioIN= mysqli_query($mysqli, "INSERT INTO empleados (cedula, nombre, rol, contrasena) 
    VALUES('$cedulaIN', '$nombreIN', '$rolIN', '$contrasenaIN')");

if ($usuarioIN) {
    echo "Usuario Añadido";
} else {
    echo "No se pudo añadir el empleado: " . mysqli_error($mysqli);
}

    }

}

?>