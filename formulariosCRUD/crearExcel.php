<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/xampp/purificadora/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT'] . "/xampp/purificadora/conexionBD/conexion.php";

use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};
$sql = "SELECT id_venta, nameCliente, domicilio, totGarrafones FROM ventas";
$data = $mysqli->query($sql);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();

$hojaActiva->setTitle("Inventario");

$hojaActiva->getColumnDimension('A')->setWidth(10);
$hojaActiva->setCellValue('A1', 'id_venta');
$hojaActiva->getColumnDimension('B')->setWidth(10);
$hojaActiva->setCellValue('B1', 'Nombre_Cliente');
$hojaActiva->getColumnDimension('C')->setWidth(10);
$hojaActiva->setCellValue('C1', 'Domicilio');
$hojaActiva->getColumnDimension('D')->setWidth(10);
$hojaActiva->setCellValue('D1', 'Garrafones comprados');
$fila=2;

while($rows = $data->fetch_assoc()){
$hojaActiva->setCellValue('A'.$fila,$rows['id_venta']);
$hojaActiva->setCellValue('B'.$fila,$rows['nameCliente']);
$hojaActiva->setCellValue('C'.$fila,$rows['domicilio']);
$hojaActiva->setCellValue('D'.$fila,$rows['totGarrafones']);
$fila++;
}
ob_end_clean();
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Inventario.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');  
?>
