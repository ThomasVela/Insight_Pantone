<?php

include_once 'conexion.php';
session_start(); 
	
	if(isset($_POST['actualizar'])){
		header('location: editar_perfil.php');	
		$nom_ape=$_POST['nom_ape'];
		$correo=$_POST['correo'];
		$num_contacto=$_POST['num_contacto'];
		$cc=$_POST['cc'];
		$educacion=$_POST['educacion'];
		$ciudad=$_POST['ciudad'];
		$celular=$_POST['celular'];
		$celular=$_POST['genero'];
		$fecha_nacimiento=$_POST['fecha_nacimiento'];
		$bio=$_POST['bio'];
		$hoja_vida=$_POST['hoja_vida'];
		$id = $_SESSION['id'];

		$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');

		$guardar="UPDATE disenador SET nom_ape='$nom_ape', correo='$correo',num_contacto='$num_contacto', cc='$cc',educacion='$educacion',ciudad='$ciudad',celular='$celular',celular='$celular',fecha_nacimiento='$fecha_nacimiento',bio='$bio',hoja_vida='$hoja_vida' WHERE id_user='$id' ";

 
			$ejecutar=mysqli_query($conexion,$guardar);
			if($ejecutar){
				
			}else{

			}			
	


	}


?>