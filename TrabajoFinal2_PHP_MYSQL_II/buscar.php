<?php 

include("conexion.php");
$conexion=mysqli_connect($servidor,$usuario,$password) or die ("nose pudo establecer conexion con el servidor");

$bd=mysqli_select_db($conexion, $basedatos) or die ("no se realizo la conexion con base de datos");


$palabra = $_GET['palabra'];

$consulta = "SELECT * FROM materia WHERE nombre_mat LIKE '%$palabra%'" or die ("No se encontro");


//realiza la consulta a base e datos respecto tabla estudiantes
$resultado=mysqli_query($conexion, $consulta) or die("no se pudo mostrar la consulta");
//mostrar datos consult


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php  

//if ($resultado) {

?>
<table border="1">

    <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Sigla</th>

    </tr>
<?php

while($columna=mysqli_fetch_array($resultado)){

?>
    <tr>
    <td><?php echo $columna['id']; ?></td>
    <td><?php echo $columna['nombre_mat']; ?></td>
    <td><?php echo $columna['sigla']; ?></td>

    <?php $id=$columna['id'] ?>
        <td><?php echo "<a href='modificar.php?id=".$id."'><img src='imagen/1234.png' width='30' height='30'> </a>"; ?></td>
        <td><?php echo "<a  onclick='return confirmacion()' href='dato_eliminar.php?id=".$id."'><img src='imagen/abcd.png' width='30' height='30'> </a>"; ?></td>

    </tr>

<?php    
}
	//}else {echo "No se encontro NADA";}
?>

 
</table>
 
</body>
</html>