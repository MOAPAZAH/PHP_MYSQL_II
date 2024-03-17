<?php 
include ('conexion.php');
$conexion=mysqli_connect($servidor,$usuario,$password) or die ("nose pudo establecer conexion con elñ servidor");
//selecionamos la base de datos
$bd=mysqli_select_db($conexion, $basedatos) or die ("no se realizo la conexion con base de datos");	
$consulta="SELECT * FROM materia";

//realiza la consulta a base e datos respecto tabla estudiantes
$resultado=mysqli_query($conexion, $consulta) or die("no se pudo mostrar la consulta");
//mostrar datos consulta
 
?>
<script type="text/javascript">
    function confirmacion() {
        var respuesta = confirm("¿Desea continuar?");
        if (respuesta==true) {
            return true;
        }else{
            return false;
        }
    }
</script>
<body>
<fieldset>
    <legend class="datos"> TABLA MATERIA
        </legend>
<table border="1">

    <tr>
        <th>ID</th>
        <th>Nombre Materia</th>
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
//<img src='abcd.png' width='30' height='30'>    
}
 ?>
</table></fieldset>
<button><a href="principal.php"><img src='imagen/a1.png' width='30' height='30'></a></button> 
<button><a href="formulario_registro.php"><img src='imagen/a3.png' width='30' height='30'></a> </button>
<button><a href="formulario_buscar.php"><img src='imagen/a4.png' width='30' height='30'></a></button>
<button><a href="formulario_mostrar_reportes.php"><img src='imagen/a5.png' width='30' height='30'></a></button>  
<button><a href="mostrar.php"><img src='imagen/a2.png' width='30' height='30'></a></button></td> 