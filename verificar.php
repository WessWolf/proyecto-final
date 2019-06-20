<?php
$matricula=$_POST["matricula"];
$pass=$_POST["pass"];

$con=mysqli_connect('localhost','root','','universidad');
if(!$con){
	die("conexion fallo perra: ".mysqli_connect_error());
}
$result = mysqli_query($conn, "SELECT matricula, pass, Name FROM alumnos");
$row = mysqli_fetch_assoc($result);
$hash = $row['pass'];
if (password_verify($_POST['pass'], $hash)) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['Name'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
				
				echo "Ha iniciado sesion";	
			
			} else {
				echo "Email or Password are incorrects! Please try again!";			
			}
?>