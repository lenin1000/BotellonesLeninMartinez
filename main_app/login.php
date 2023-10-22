<?php


session_start();

$mysqli= mysqli_connect('localhost', 'id21439394_root', 'Gene$i$1802%', 'id21439394_botellones');


if(isset($_POST['action'])){


    if($_POST['action']=="Login"){

        login();

    }


}



function login(){

global $mysqli;

$cedula= $_POST['cedulatxt'];

$contrasena= $_POST['contrasenatxt'];

if(empty($cedula) || empty($contrasena)){

    echo "Rellene todos los campos ";

    exit;
}

$usuarios= mysqli_query($mysqli, "SELECT id_Empleado, nombre, rol 
FROM empleados 
WHERE cedula= '$cedula'
AND contrasena= '$contrasena'");

if (mysqli_num_rows($usuarios)>0){

    $datos= mysqli_fetch_assoc($usuarios);

    $rol= $datos['rol'];

    if($rol=="Administrador"){

        $_SESSION['Login']=true;

        $_SESSION['id']= $datos['id_Empleado'];

       echo "Bienvenido Adminstrador";

       

    }elseif($rol=="Empleado")   {
        
        $_SESSION['Login']=false;

        $_SESSION['id']= $datos['id_Empleado'];

        echo "Bienvenido Empleado";

    }

 

}else{


    echo "Campos invalidos";

    exit;

}

}




/*if ($usuarios->num_rows == 1):
    $datos= $usuarios->fetch_assoc();
    echo json_encode(array('error' => false, 'tipo' => $datos['rol']));
else:
    echo json_encode(array('error' => true));

endif;*/
?>