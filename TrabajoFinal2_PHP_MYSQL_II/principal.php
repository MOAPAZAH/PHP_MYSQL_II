 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FORMULARIO MENU</title>
	<link rel="stylesheet" type="text/css" href="aspectoFormulario.css">

</head>
<body>
	<center>		
		<fieldset>
			<legend><h4>NOMBRE: MARIO OLIVER APAZA HUANCA</h4></legend>
		
		<table border="1">
			<thead><h3>MATERIA MENU</h3><img src='imagen/a1.png' width='30' height='30'></thead>
			<tr>
				<td>REGISTRAR NUEVA MATERIA</td>
				<td><button><a href="formulario_registro.php"><img src='imagen/a3.png' width='30' height='30'></a> </button></td>
			</tr>
			<tr>
				<td>BUSCAR MATERIA</td>
				<td><button><a href="formulario_buscar.php"><img src='imagen/a4.png' width='30' height='30'></a></button></td>
			</tr>
			<tr>
				<td>MOSTRAR REPORTES</td>
				<td><button><a href="formulario_mostrar_reportes.php"><img src='imagen/a5.png' width='30' height='30'></a></button></td>
			</tr>
			<tr>
				<td>MOSTRAR TABLA DE MATERIA</td>
				<td><button><a href="mostrar.php"><img src='imagen/a2.png' width='30' height='30'></a></button></td> </td>
			</tr>

		</table>
		</fieldset>
		
</center>
</body>
<style>
    table{
    background-color: white;
    text-align: left;
    border-collapse: collapse;
    
}

th, td{
    padding: 20px;
}

thead{
    background-color: #246355;
    border-bottom: solid 5px #0F362D;
    color: white;
}

tr:nth-child(even){
    background-color: #ddd;
}

tr:hover td{
    background-color: #369681;
    color: white;
}


</style>
</html>