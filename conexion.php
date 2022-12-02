<?php
$host="localhost";
$usuario="root";
$pass="";
$nomdb="formulario";
$puerto="33065";

$conexion= new mysqli($host,$usuario,$pass,$nomdb,$puerto);

if ($conexion){
 echo "(Conexion exitosa)";
}
else{
 echo "No se realizo la conexion a la base de datos";
}
?>