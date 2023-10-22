<?php
require('../fpdf/fpdf.php'); // Asegúrate de que la ruta sea la correcta para el archivo FPDF

class PDF extends FPDF
{
    function Header()
    {
        // Encabezado
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Reporte de Ventas', 0, 1, 'C');
    }

    function Footer()
    {
        // Pie de página
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Página ' . $this->PageNo(), 0, 0, 'C');
    }

    function ChapterTitle($title)
    {
        // Título del capítulo
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 6, $title, 0, 1);
    }

    function ChapterBody($body)
    {
        // Contenido del capítulo
        $this->SetFont('Arial', '', 12);
        $this->MultiCell(0, 10, $body);
        $this->Ln();
    }

    function AddTable($header, $data)
    {
        // Agregar una tabla
        foreach ($header as $col) {
            $this->Cell(40, 7, utf8_decode($col), 1);
        }
        $this->Ln();
        foreach ($data as $row) {
            foreach ($row as $col) {
                $this->Cell(40, 7, utf8_decode($col), 1);
            }
            $this->Ln();
        }
    }
}

$mysqli = mysqli_connect('localhost', 'id21439394_root', 'Gene$i$1802%', 'id21439394_botellones');

// Consulta a la base de datos
$query = "SELECT * FROM ventas";
$result = mysqli_query($mysqli, $query);

$pdf = new PDF();
$pdf->AddPage();


// Encabezados de la tabla
$header = array('ID', 'ID Cliente', 'Cédula Cliente', 'Nombre Cliente', 'Apellido Cliente', 'Ubicación', 'Cantidad Producto', 'Fecha Hora Venta');
$data = array();

// Recuperar los datos de la tabla y agregarlos a la matriz $data
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = array($row['id_venta'], $row['id_cliente'], $row['cedula_cliente'], $row['nombre_cliente'], $row['apellido_Cliente'], $row['ubicacion'], $row['cantidad_producto'], $row['fecha_hora_venta']);
}

$pdf->AddTable($header, $data);
$pdf->Output();
?>
