<?php

include ("conexion.php");

//Recuperamos las variables 
$existe_registro=false;
if (isset($_REQUEST["nombre"]) && !empty($_REQUEST["nombre"]) && 
    isset($_REQUEST["sigla"]) && !empty($_REQUEST["sigla"]))
{
    $id=$_REQUEST["id"];
    $nombre_mat = $_REQUEST["nombre"];
    $sigla = $_REQUEST["sigla"]; 
    $existe_registro=true;  
}

   
//creamos conexion de la base de datos con MYSQL 
$conexion=mysqli_connect($servidor,$usuario,$password) or die ("nose pudo establecer conexion con elñ servidor");
//selecionamos la base de datos
$bd=mysqli_select_db($conexion, $basedatos) or die ("no se realizo la conexion con base de datos");

//actualizacion de registros en la base de datos

if($existe_registro){
    
    //se elebora la consulta de modificacion
    $consulta="UPDATE materia SET id='$id',nombre_mat='$nombre_mat', sigla = '$sigla' WHERE id='$id';";
    //se ejecuta la consulta
    $resultado=mysqli_query($conexion, $consulta) or die("no se pudo realizar el registro del estudiante");
    echo "Se ha realizado correctamente la consulta";
    echo header("location: mostrar.php");
}
//************************************************** */



?>
