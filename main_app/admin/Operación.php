<?php
require "../login.php";

if (!isset($_SESSION['id'])) {
    header("location: ../../iniciarsesion.php");
    exit;
}

$id = $_SESSION["id"];
$user = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM empleados WHERE id_Empleado= $id"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&family=Mooli&family=Open+Sans&family=Roboto+Condensed:ital@0;1&family=Roboto:wght@100;300;400;900&family=Rubik&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Style/operacion.css">
    <title>Thompson-Operación</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-4 mb-4">
            <h1 class="usuarioh1">Bienvenido <?php echo $user['nombre']; ?></h1>
        </div>
    </div>

    <form action="" method="post" class="row g-3 needs-validation" novalidate>
        <div class="col-md-4 mb-4">
            <input type="hidden" name="" id="action3" value="Insertar">
            <label for="cedulaVenta" class="form-label">Cédula</label>
            <input type="number" class="form-control" name="cedulaVenta" id="cedulaVenta" value="Mark" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <label for="ciudadVenta" class="form-label">Ciudad</label>
            <select class="form-select" name="ciudadVenta" id="ciudadVenta" required>
                <option>Maracaibo</option>
                <option>Maracay</option>
                <option>Valencia</option>
                <option>Caracas</option>
                <option>San Cristobal</option>
                <option>Barquisimeto</option>
            </select>
            <div class="invalid-feedback">
                Por favor, selecciona una opción válida.
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <label for="cantidadVenta" class="form-label">Cantidad Botellones</label>
            <input type="number" class="form-control" name="cantidadVenta" id="cantidadVenta" required>
            <div class="invalid-feedback">
                Por favor, proporciona una cantidad válida.
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" onclick="submitData2();" type="button">Realizar Venta</button>
        </div>
    </form>

    <div class="row mt-4">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Venta</th>
                        <th scope="col">ID Cliente</th>
                        <th scope="col">Cédula Cliente</th>
                        <th scope="col">Nombre Cliente</th>
                        <th scope="col">Apellido Cliente</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Cantidad Producto</th>
                        <th scope="col">Fecha Hora Venta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Realizar una consulta a la tabla de ventas
                    require "../venta.php";
                    $query = "SELECT * FROM ventas";
                    $result = mysqli_query($mysqli, $query);

                    // Iterar a través de los resultados y mostrar cada fila en la tabla
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $row['id_venta'] . "</th>";
                        echo "<td>" . $row['id_cliente'] . "</td>";
                        echo "<td>" . $row['cedula_cliente'] . "</td>";
                        echo "<td>" . $row['nombre_cliente'] . "</td>";
                        echo "<td>" . $row['apellido_Cliente'] . "</td>";
                        echo "<td>" . $row['ubicacion'] . "</td>";
                        echo "<td>" . $row['cantidad_producto'] . "</td>";
                        echo "<td>" . $row['fecha_hora_venta'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <button class="btn btn-primary" onclick="location.href='../GenerarPDF.php'" type="button">Generar PDF</button>
            <button class="btn btn-primary" onclick="location.href='../AñadirCliente.php'" type="button">Añadir Cliente</button>
            <button class="btn btn-primary" onclick="location.href='./insertarEmpleado.php'" type="button">Añadir Empleado</button>
            <button class="btn btn-primary" onclick="location.href='../../CerrarSesion.php'" type="button">Cerrar Sesión</button>
        </div>
    </div>
</div>


<?php require "../mainVenta.php";?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>      
</body>
</html>