<?php


require "./main_app/login.php";

if(isset($_SESSION['id'])){

  if($_SESSION['Login']==true){

  header("location: main_app/admin/Operación.php ");

  }elseif($_SESSION['Login']==false){

    header("location: main_app/emple/Operación.php ");

  }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/sesion.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&family=Mooli&family=Open+Sans&family=Roboto+Condensed:ital@0;1&family=Roboto:wght@100;300;400;900&family=Rubik&family=Tilt+Neon&display=swap" rel="stylesheet">
    <title>Thompson-IniciarSesión</title>
</head>
<body>
    


<div class="main">

<form action="" method="post" id="formlg">

<div class="Container_sesion">

<h1 class="Login">Login</h1>

  <div class="mb-3">
    <input type="hidden" name="" id="action" value="Login">
    <label for="exampleInputEmail1" class="form-label">Cédula</label>
    <input type="number" class="form-control"  name="cedulatxt" id="cedulatxt" >
    <div id="emailHelp" class="form-text">Ingresa tú cédula de identidad</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Contraseña</label>
    <input type="password" class="form-control" name="contrasenatxt" id="contrasenatxt">
  </div>


  <button class="btn btn-primary" type="button" onclick="submitData();">Iniciar Sesión</button>
  <button class="btn btn-primary" onclick="location.href='index.php'" type="button">Volver</button>



</form>

</div>

</div>


<?php require "main_app/main.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>   

</body>
</html>