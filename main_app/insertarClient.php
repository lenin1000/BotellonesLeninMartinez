<?php

$mysqli= mysqli_connect('localhost', 'id21439394_root', 'Gene$i$1802%', 'id21439394_botellones');

if(isset($_POST['action2'])){


    if($_POST['action2']=="Insertar"){

        insertarClient();

    }


}


function insertarClient(){

    
    global $mysqli;

    $cedulaCLIENT=$_POST['cedulaCliente'];

    $nombreCLIENT= $_POST['nombreCliente'];

    $apellidoCLIENT= $_POST['apellidoCliente'];

    if(empty($cedulaCLIENT) || empty($nombreCLIENT) || empty($apellidoCLIENT)){

        echo "Rellene todos los campos ";
    
        exit;
    }

    $usuarios= mysqli_query($mysqli, "SELECT id_cliente 
    FROM clientes 
    WHERE cedula= '$cedulaCLIENT'");

    if(mysqli_num_rows($usuarios)>0){


        echo "La cédula del usuario ya existe en el sistema";

    }else{

    $usuarioCLIENT= mysqli_query($mysqli, "INSERT INTO clientes (cedula, nombre, apellido) 
    VALUES('$cedulaCLIENT', '$nombreCLIENT', '$apellidoCLIENT')");

if ($usuarioCLIENT) {
    echo "Cliente Añadido";
} else {
    echo "No se pudo añadir el Cliente: " . mysqli_error($mysqli);
}

    }

}

?>