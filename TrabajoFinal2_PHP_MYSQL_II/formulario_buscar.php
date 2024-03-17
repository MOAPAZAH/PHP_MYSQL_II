<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FORMULARIO DE BUSQUEDA MATERIA</title>
</head>
    <body>

    <form action="" method="GET" autocomplete="off">
    <fieldset>
        <legend class="datos"> BUSQUEDA DE DATOS DE LA MATERIA  
        </legend>
        <label>NOMBRE_MATERIA </label>
            <input type="text" name="palabra" placeholder="¿Que estas buscando?">
            <input type="submit" name="buscar" value="BUSCAR">
            
        </label>
        </fieldset>
        <?php
        if (isset($_GET['palabra'])) {
                include ("conexion.php");
                include ("buscar.php");
          }  

        ?>  

    </form>
<button><a href="principal.php"><img src='imagen/a1.png' width='30' height='30'></a></button> 
<button><a href="formulario_registro.php"><img src='imagen/a3.png' width='30' height='30'></a> </button>
<button><a href="formulario_buscar.php"><img src='imagen/a4.png' width='30' height='30'></a></button>
<button><a href="formulario_mostrar_reportes.php"><img src='imagen/a5.png' width='30' height='30'></a></button>  
<button><a href="mostrar.php"><img src='imagen/a2.png' width='30' height='30'></a></button></td> 

    </body>
</html>