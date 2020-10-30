<?php
require('fpdf.php');

class PDF extends FPDF{
    // Cabecera de página
    function Header(){
        // Logo
        $this->Image('',10,8,140);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    function Footer(){
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        $this->SetY(-30);
        $this->SetFont('Arial', 'I', 10);
        $date = date('d/m/Y');
        $time = date('H:i:s');
        $this->Cell(0, 10, 'Fecha: '.$date, 'C');
        $this->Ln(5);
        $this->Cell(0, 10, 'Hora: '.$time, 'C');
    }

    function cabeceraVertical($cabecera, $x, $y, $width){
        $this->SetXY($x, $y);
        $this->SetFont('Arial','B',10);
        foreach($cabecera as $columna)
        {
            //Parámetro con valor 2, hace que la cabecera sea vertical
            if (mb_detect_encoding(utf8_decode($columna)) == "UTF-8") {
                $this->Cell($width,7, utf8_decode($columna),1, 2 , 'L' );
            }else{
                $this->Cell($width,7, ($columna),1, 2 , 'L' );
            }
        }
    }

    function datosVerticales($datos, $x, $y, $width){
        $this->SetXY($x, $y); //40 = 10 posiciónX_anterior + 30ancho Celdas de cabecera
        $this->SetFont('Arial','',10); //Fuente, Normal, tamaño
        foreach($datos as $columna)
        {
            if (mb_detect_encoding(utf8_decode($columna)) == "UTF-8") {
                $this->Cell($width,7, utf8_decode($columna),1, 2 , 'L' );
            }else{
                $this->Cell($width,7, ($columna),1, 2 , 'L' );
            }
        }
    }

    function cabeceraHorizontal($cabecera){
        $this->SetXY(30, 70);
        $this->SetFont('Arial','B',10);
        foreach($cabecera as $fila)
        {
            //El parámetro valor 0, hace que sea horizontal
            $this->Cell(24,7, ($fila),1, 0 , 'L' );
        }
    }

    function datosHorizontal($datos){
        $this->SetXY(30,77); // 77 = 70 posiciónY_anterior + 7 altura de las de cabecera
        $this->SetFont('Arial','',10); //Fuente, normal, tamaño
        foreach($datos as $fila)
        {
            //El parámetro valor 0, hace que sea horizontal
            $this->Cell(24,7, ($fila),1, 0 , 'L' );
        }
    }
}
?>
