<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thompson-Insertar Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&family=Mooli&family=Open+Sans&family=Roboto+Condensed:ital@0;1&family=Roboto:wght@100;300;400;900&family=Rubik&family=Tilt+Neon&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">
    <form action="" method="post" id="formlg" class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
            <input type="hidden" name="action2" id="action2" value="Insertar">
            <label for="cedulaCliente" class="form-label">Cédula</label>
            <input type="number" class="form-control" name="cedulaCliente" id="cedulaCliente" value="Mark" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="nombreCliente" class="form-label">Nombre</label>
            <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')" name="nombreCliente" id="nombreCliente" value="" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="apellidoCliente" class="form-label">Apellido</label>
            <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')" name="apellidoCliente" id="apellidoCliente" value="" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" onclick="submitData2();" type="button">Añadir Cliente</button>
        </div>
    </form>

    <div class="row">
        <div class="col-12 mt-4">

        
            <a href="emple/Operación.php" class="btn btn-secondary">Volver</a>

        </div>
    </div>
</div>

<?php require "./mainCliente.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>