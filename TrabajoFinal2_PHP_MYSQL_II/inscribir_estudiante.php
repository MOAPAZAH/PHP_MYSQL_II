<?php 
include ("conexion.php");
include ("dato_inscribirse.php");


$existe_registro = false;
if (isset($_REQUEST["id_mat"]) && !empty($_REQUEST["id_mat"])) 
{
    $id_es = $id_est;
    $id_mat= $_REQUEST['id_mat'];
    $existe_registro=true;
}
if ($existe_registro) {
   echo "hhh";
}



 ?> 
