<?php

/*Se establecen los encabezados para que el navegador interprete que descargará un archivo de Excel.*/

header('Content-type: application/vnd.ms-excel;charset=utf-8');
header("Content-Disposition: attachment; filename=oportunidad.xls");
header("Pragma: no-cache");
header("Expires: 0");

/*Se construye una tabla HTML*/
$print = "<table>";
$print .= "<tr>";
$print .= "<td>";
$print .= "Valor 1";
$print .= "</td>";
$print .= "<td>";
$print .= "Valor 2";
$print .= "</td>";
$print .= "<td>";
$print .= "Total";
$print .= "</td>";
$print .= "</tr>";
$print .= "<tr>";
$print .= "<td>";
$print .= "10";
$print .= "</td>";
$print .= "<td>";
$print .= "20";
$print .= "</td>";
$print .= "<td>";
$print .= "=suma(A2:B2)";
$print .= "</td>";
$print .= "</tr>";
$print .= "</table>";

echo $print;

?>

<?php
/** Incluir la libreria PHPExcel */
require_once '../excell/Classes/PHPExcel.php';

// Crea un nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();

// Establecer propiedades
$objPHPExcel->getProperties()
->setCreator("Cattivo")
->setLastModifiedBy("Cattivo")
->setTitle("Documento Excel de Prueba")
->setSubject("Documento Excel de Prueba")
->setDescription("Demostracion sobre como crear archivos de Excel desde PHP.")
->setKeywords("Excel Office 2007 openxml php")
->setCategory("Pruebas de Excel");

// Agregar Informacion
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1', 'Valor 1')
->setCellValue('B1', 'Valor 2')
->setCellValue('C1', 'Total')
->setCellValue('A2', '10')
->setCellValue('C2', '=sum(A2:B2)');

// Renombrar Hoja
$objPHPExcel->getActiveSheet()->setTitle('Tecnologia Simple');

// Establecer la hoja activa, para que cuando se abra el documento se muestre primero.
$objPHPExcel->setActiveSheetIndex(0);

// Se modifican los encabezados del HTTP para indicar que se envia un archivo de Excel.
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="pruebaReal.xlsx"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>