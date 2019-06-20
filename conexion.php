<?php
	try{
		$pdoConexion=new PDO('mysql:host=localhost;dbname=universidad','root','');
		echo 'Conexion establecida';
	} catch(PDOExpection $esp){
		echo 'Error de conexion';
	}
	finally{
		$base=null;
	}
?>