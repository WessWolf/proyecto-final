<?php

$matricula=$_POST["matricula"];
$pass=$_POST["pass"];
$apepat=$_POST["apepat"];
$apemat=$_POST["apemat"];
$nombre=$_POST["nombre"];
$domicilio=$_POST["domicilio"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];


$con=mysqli_connect('localhost','root','','universidad');
if(!$con){
	die("conexion fallo perra: ".mysqli_connect_error());
}
echo "however";


$sql = "INSERT INTO alumnos (matricula,pass,apepat,apemat,nombre,domicilio,telefono,correo)
VALUES ('$matricula','$pass','$apepat','$apemat','$nombre','$domicilio','$telefono','$correo')";
if (mysqli_query($con,$sql)) {
    echo "Lo lograste perra";
} else {
    echo "Deberias planear chingarte ese aguacate :/ porque esto no te va a salir " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close ($con);

?>