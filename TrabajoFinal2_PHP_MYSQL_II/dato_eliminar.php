<?php 

include ("conexion.php");

$existe_registro = false;

if (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) {
    $id=$_REQUEST["id"];
    $existe_registro=true;
}

$conexion=mysqli_connect($servidor,$usuario,$password) or die ("nose pudo establecer conexion con el servidor");
//selecionamos la base de datos
$bd=mysqli_select_db($conexion, $basedatos) or die ("no se realizo la conexion con base de datos");


if ($existe_registro) {
    $consulta = "DELETE FROM materia WHERE ID = '$id';";
    $resultado =mysqli_query($conexion, $consulta) or die("no se pudo realizar el registro del estudiante");
    echo "Se elimino materia";
    echo header("location: mostrar.php");


}else{
    echo "No se encontro la informacion";
}


?>
<br>
