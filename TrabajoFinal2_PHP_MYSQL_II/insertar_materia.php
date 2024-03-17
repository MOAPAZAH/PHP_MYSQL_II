<?php 

include ('conexion.php');



if (isset($_REQUEST["nombre"]) && !empty($_REQUEST["nombre"]) && 
	isset($_REQUEST["sigla"]) && !empty($_REQUEST["sigla"])) 
{

$nombre_mat = $_REQUEST["nombre"];
$sigla = $_REQUEST["sigla"];

//CONEXION	
$connexion = mysqli_connect($servidor, $usuario, $password, $basedatos) or die("No se encontro la base de datos");

$db = mysqli_select_db($connexion, $basedatos) or die("No se encontro la base de datos");

/// CONSULTA PARA INSETAR
$consulta ="select * from materia";
/// SI EXISTE
$resultado = mysqli_query($connexion, $consulta) or die("No existe la tabla");
//$columna = mysqli_fetch_array($resultado);

$sql = "INSERT INTO materia (nombre_mat, sigla) VALUES ('$nombre_mat', '$sigla')";

if (mysqli_query($connexion, $sql)) {
     echo "Se ingreso nuevo estudiante";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connexion);
}
echo "Se inserto materia";
echo header("location: mostrar.php");

}

else { echo "te faltan datos";}

 ?>
