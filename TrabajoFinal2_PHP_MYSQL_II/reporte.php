<?php

include ("conexion.php");
include ("plantilla.php");

if (!empty($_GET['materia'])) {

    $idmat = $_GET['materia'];

    //CREAMOS LA CONEXION DE LA BASE DE DATOS CON MYSQL mysql_connect()
$conexion=mysqli_connect($servidor,$usuario,$password) or die("No se ha podido establecer conexion el servidor");
//SELECCIONAMOS LA BASE DE DATOS A UTILIZAR
$bd=mysqli_select_db($conexion,$basedatos) or die ("No se ha podido establecer conexion con la base de datos");

$consultamateria="SELECT * FROM materia WHERE id = $idmat";
$resultadomateria=mysqli_query($conexion,$consultamateria)or die("No se ha podido mostrar la consulta");

    //$sqlGrado = "SELECT sigla FROM materia WHERE id = $idmat";
    //$resultadomateria = $mysqli->query($sqlGrado);
    //$row_grado = $resultadoGrado->fetch_assoc();
    //$nombreGrado = $row_grado['grado'];
    $columnamateria=mysqli_fetch_array($resultadomateria);
    $nombremateria=$columnamateria['nombre_mat'];
    $tituloReporte = "Reporte de Estudiantes";

    $consultainscripcion = "SELECT nombre, a_paterno, a_materno, ci, exp FROM (estudiante as e inner join inscripcion as i on e.id = i.id_est) inner join materia as m on i.id_mat=m.id where m.id=$idmat";
    $resultadoinscripcion=mysqli_query($conexion,$consultainscripcion)or die("No se ha podido mostrar la consulta");

    $pdf = new PDF("P", "mm", "letter");
    $pdf->SetTitle($tituloReporte);
    $pdf->SetAuthor('Mario Oliver Apaza Huanca');
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 9);

    //$pdf->Cell(10, 5, "Id", 1, 0, "C");
    $pdf->Cell(40, 5, "NOMBRE", 1, 0, "C");
    $pdf->Cell(30, 5, "AP. PATERNO", 1, 0, "C");
    $pdf->Cell(30, 5, "AP. MATERNO", 1, 0, "C");
    $pdf->Cell(30, 5, "CI", 1, 0, "C");
    $pdf->Cell(20, 5, "EXPEDIDO", 1, 0, "C");
    $pdf->Cell(30, 5, "MATERIA", 1, 0, "C");
    
    $pdf->SetFont("Arial", "", 9);
    $pdf->Ln();

    while ($colins=mysqli_fetch_array($resultadoinscripcion)) {
        //$pdf->Cell(10, 5, $fila['id'], 1, 0, "C");
        $pdf->Cell(40, 5, mb_convert_encoding($colins['nombre'], 'ISO-8859-1', 'UTF-8'), 1, 0, "C");
        $pdf->Cell(30, 5, $colins['a_paterno'], 1, 0, "C");
        $pdf->Cell(30, 5, $colins['a_materno'], 1, 0, "C");
        $pdf->Cell(30, 5, $colins['ci'], 1, 0, "C");
        $pdf->Cell(20, 5, $colins['exp'], 1, 0, "C");
        $pdf->Cell(30, 5, $nombremateria, 1, 0, "C");
        $pdf->Ln();
    }

    $pdf->Output('I', $tituloReporte . '.pdf');
}
else{ echo "FALTAN DATOS";
?>
<br><button><a href="principal.php"><img src='imagen/a1.png' width='30' height='30'></a></button> 
<button><a href="formulario_registro.php"><img src='imagen/a3.png' width='30' height='30'></a> </button>
<button><a href="formulario_buscar.php"><img src='imagen/a4.png' width='30' height='30'></a></button>
<button><a href="formulario_mostrar_reportes.php"><img src='imagen/a5.png' width='30' height='30'></a></button>  
<button><a href="mostrar.php"><img src='imagen/a2.png' width='30' height='30'></a></button></td> 
<?php  
}
  ?>