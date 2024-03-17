<html>

<?php

include ("conexion.php");

//Recuperamos las variables del formulario estudiante
//y validar las variablesno esten vacias
$existe_registro=false;
if(isset($_REQUEST["nombre"]) && !empty($_REQUEST["nombre"])
      &&  isset($_REQUEST["paterno"]) && !empty($_REQUEST["paterno"])
      &&  isset($_REQUEST["materno"]) && !empty($_REQUEST["materno"])
      &&  isset($_REQUEST["ci"]) && !empty($_REQUEST["ci"])
      &&  isset($_REQUEST["exp"]) && !empty($_REQUEST["exp"])
      &&  isset($_REQUEST["fecha"]) && !empty($_REQUEST["fecha"]))
      {
       $nombre=$_REQUEST["nombre"];
       $paterno=$_REQUEST["paterno"];
       $materno=$_REQUEST["materno"];
       $ci=$_REQUEST["ci"];
       $exp=$_REQUEST["exp"];
       $fecha=$_REQUEST["fecha"];
    $existe_registro=true;  
    }

   
//creamos conexion de la base de datos con MYSQL 
$conexion=mysqli_connect($servidor,$usuario,$password) or die ("nose pudo establecer conexion con elñ servidor");
//selecionamos la base de datos
$bd=mysqli_select_db($conexion, $basedatos) or die ("no se realizo la conexion con base de datos");
//********************************************* */
//esta seccion es para mostrar los datos de la tabla estudiante
//************************************************ */
//verificamos si existieron datos se realizarala insercion
//echo ($existe_registro."saludos")
if($existe_registro){
    //echo ($existe_registro."hola")//si imprime los dos en consulta
    //se elebora la consulta
    $consulta_registro="INSERT INTO estudiante (nombre, a_paterno, a_materno, ci, exp, fecha_nac)
                        VALUES ('$nombre', '$paterno', '$materno', '$ci', '$exp', '$fecha') ";
    //se ejecuta la consulta
    $resultado_insercion=mysqli_query($conexion, $consulta_registro) or die("no se pudo realizar el registro del estudiante");
    
}
//************************************************** */

//verificar conexion y mostramos tabla estudiante
$consulta="SELECT * FROM estudiante";

//realiza la consulta a base e datos respecto tabla estudiantes
$resultado=mysqli_query($conexion, $consulta) or die("no se pudo mostrar la consulta");
//mostrar datos consulta
 
?>

<body>
<h1>Se registro con exito</h1>
<table border="1">

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        
        <th>Paterno</th>
        <th>Materno</th>
        <th>CI</th>
        <th>Exp</th>
        <th>Fecha Nacimiento</th>
        <th></th>
        <th></th>
    </tr>
<?php
while($columna=mysqli_fetch_array($resultado)){

?>
    <tr>
        <td><?php echo $columna['id']; ?></td>
    <td><?php echo $columna['nombre']; ?></td>
    <td><?php echo $columna['a_paterno']; ?></td>
    <td><?php echo $columna['a_materno']; ?></td>
    <td><?php echo $columna['ci']; ?></td>
    <td><?php echo $columna['exp']; ?></td>
    <td><?php echo $columna['fecha_nac']; ?></td>
    <?php $id=$columna['id'] ?>
        <td><?php echo "<a href='modificar.php?id=".$id."'>modificar</a>"; ?></td>
         <td><?php echo "<a href='dato_eliminar.php?id=".$id."'>eliminar</a>"; ?></td>

    </tr>


<?php    
}
?>

 
</table>
<button onclick=""><a href="registro.php">Ir a Registrar</a>  </button>
</body>

</html>