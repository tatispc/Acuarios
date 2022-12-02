<?php
include("conexion.php");
if((isset($_POST['nombre']) && !empty($_POST['nombre']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['asunto']) && !empty($_POST['asunto']))){
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
}
//INSERTAR DATOS
$query="INSERT INTO datos(nombre,email,asunto,mensaje)VALUES('".$_POST['nombre']."', '".$_POST['email']."', '".$_POST['asunto']."','".$_POST['mensaje']."')";
$resultado = mysqli_query($conexion, $query); 

if ($resultado){
 echo "(Datos insertados correctamente)";
}
else{
 echo "No se insertaron los datos";
}


?>

