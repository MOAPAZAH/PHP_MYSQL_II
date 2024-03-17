
<?php 
if(isset($_GET['id'])){

//recuperamos la conexion
    include ("conexion.php");
    //conexion con la base de datos

$conexion=mysqli_connect($servidor,$usuario,$password) or die ("nose pudo establecer conexion con el servidor");
//selecionamos la base de datos
$bd=mysqli_select_db($conexion, $basedatos) or die ("no se realizo la conexion con base de datos");
//********************************************* */
//recuperamos el id del estudiante
$id=$_GET['id'];
//creamos la consulta para buscar segun el id del estudiante
$consulta="SELECT * FROM materia WHERE id='$id'";
//ejecutamos para recuperar el registro segun el id


$resultado=mysqli_query($conexion, $consulta) or die("no se pudo mostrar la consulta");

$columna=mysqli_fetch_array($resultado);
//echo $columna['nombre'];
?>
<html>
    <head>
        <title>FORMULARIO DE MODIFICACION MATERIA</title>
    </head>
    <body>
        <?php  echo "ID DE LA MATERIA: ".$id; ?>
          <form action="datos_actualiza.php" method="REQUEST">
            <fieldset> 
                 <input type="hidden" name="id" value="<?php echo $columna['id'];?>" />
                 <legend class="datos"> Datos de la Materia</legend>
                 <label>Nombre de la Materia: </label><input type="text" name="nombre" value="<?php echo $columna['nombre_mat'];?>" /></br>
                 <label>Sigla de la Materia: </label><input type="text" name="sigla" value="<?php echo $columna['sigla'];?>"/></br>
                </br>
            </fieldset>

                 <input type="submit" value="MODIFICAR"/>
                 <input type="reset" value="CANCELAR"/>
                
          </form>
<button><a href="principal.php"><img src='imagen/a1.png' width='30' height='30'></a></button> 
<button><a href="formulario_registro.php"><img src='imagen/a3.png' width='30' height='30'></a> </button>
<button><a href="formulario_buscar.php"><img src='imagen/a4.png' width='30' height='30'></a></button>
<button><a href="formulario_mostrar_reportes.php"><img src='imagen/a5.png' width='30' height='30'></a></button>  
<button><a href="mostrar.php"><img src='imagen/a2.png' width='30' height='30'></a></button></td> 
           
    </body>


</html>
<?php

}else {
    echo "Ocurrio un error, no se encontraron datos";
}
?>    