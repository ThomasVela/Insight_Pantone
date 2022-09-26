<?php

include_once 'conexion.php';
session_start(); 
	
	if(isset($_POST['actualizar'])){
		header('location: editar_perfilE.php');	
		$nom_ape=$_POST['nom_ape'];
		$ciudad=$_POST['ciudad'];
		$celular=$_POST['celular'];
		$correo=$_POST['correo'];
		$empresa=$_POST['empresa'];
		$nit=$_POST['nit'];
		$numero_contacto=$_POST['numero_contacto'];
		$id = $_SESSION['id'];

		$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');

		$guardar="UPDATE empleador SET nom_ape='$nom_ape', ciudad='$ciudad',celular='$celular', correo='$correo',empresa='$empresa',nit='$nit',numero_contacto='$numero_contacto' WHERE id_user='$id' ";

 
			$ejecutar=mysqli_query($conexion,$guardar);


	}


?>