<?php

$mysqli= mysqli_connect('localhost', 'id21439394_root', 'Gene$i$1802%', 'id21439394_botellones');


if(isset($_POST['action3'])){


    if($_POST['action3']=="Insertar"){

        venta();

    }


}

function venta(){
    global $mysqli;

    $cedulaCliente = $_POST['cedulaVenta'];

    $ubicacion = $_POST['ciudadVenta']; // Obtener la ubicación del formulario
    $cantidadProducto = $_POST['cantidadVenta']; // Obtener la cantidad del producto del formulario


    if (empty($cedulaCliente) || empty($ubicacion) || empty($cantidadProducto)) {
        echo "Rellene todos los campos ";
        exit;
    }




    $consultaCliente = "SELECT id_cliente, cedula, nombre, apellido FROM clientes WHERE cedula = '$cedulaCliente'";
    $resultadoCliente = mysqli_query($mysqli, $consultaCliente);

    if (mysqli_num_rows($resultadoCliente) > 0) {
        $cliente = mysqli_fetch_assoc($resultadoCliente);
        $idCliente = $cliente['id_cliente'];
        $nombreCliente = $cliente['nombre'];
        $apellidoCliente = $cliente['apellido'];
        $cedulaCliente = $cliente['cedula'];



        $consultaVenta = "INSERT INTO ventas (id_cliente, cedula_cliente, nombre_cliente, apellido_Cliente, ubicacion, cantidad_producto) 
        VALUES ('$idCliente', '$cedulaCliente', '$nombreCliente', '$apellidoCliente', '$ubicacion', '$cantidadProducto')";

        if (mysqli_query($mysqli, $consultaVenta)) {
            echo "Venta registrada con éxito.";
        } else {
            echo "Error al registrar la venta: " . mysqli_error($mysqli);
        }
    } else {
        echo "El cliente no está registrado en la tabla de clientes.";
    }
}

?>