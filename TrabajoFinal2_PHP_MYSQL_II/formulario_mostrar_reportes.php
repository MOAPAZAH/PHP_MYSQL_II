<?php 
include ('conexion.php');

$conexion=mysqli_connect($servidor,$usuario,$password) or die ("nose pudo establecer conexion con el servidor");

$bd=mysqli_select_db($conexion, $basedatos) or die ("no se realizo la conexion con base de datos");


//consulta para la materia
$consulta = "SELECT * FROM materia";


//realiza la consulta a base e datos respecto tabla estudiantes
$resultado=mysqli_query($conexion, $consulta) or die("no se pudo mostrar la consulta");
//mostrar datos consult

 ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GENERADOR DE REPORTES</title>
</head>
<body>
    <fieldset>
        <legend>GENERADOR PDF REPORTES</legend>
  
    
    <form action="reporte.php" method="GET" autocomplete="off">
        <label for="materia">Seleccione la Materia:</label> 
        <select id="materia" name="materia">
        <option value="">Seleccion una opcion</option>
        <?php 
        while($columna=mysqli_fetch_array($resultado)){
        ?>
        <option value="<?php echo $idmat =$columna['id']; ?>">
            <?php echo $columna['sigla']; ?>
        </option>       
        <?php  }?>
        <input type="submit" name="" value="GENERAR PDF">
        </select>
       
    </form>
</fieldset>

<button><a href="principal.php"><img src='imagen/a1.png' width='30' height='30'></a></button> 
<button><a href="formulario_registro.php"><img src='imagen/a3.png' width='30' height='30'></a> </button>
<button><a href="formulario_buscar.php"><img src='imagen/a4.png' width='30' height='30'></a></button>
<button><a href="formulario_mostrar_reportes.php"><img src='imagen/a5.png' width='30' height='30'></a></button>  
<button><a href="mostrar.php"><img src='imagen/a2.png' width='30' height='30'></a></button></td> 
    
    

</body>
</html>