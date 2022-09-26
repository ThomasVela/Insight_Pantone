<?php 
	include_once 'conexion.php';
	session_start();

		if(isset($_POST['Bperfil'])){
			header('location: inicio_sesion.php');
			

			$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');
			$id = $_SESSION['id'];
			$eleminar="DELETE FROM usuarios WHERE id='$id'";
						
			$ejecutar=mysqli_query($conexion,$eleminar);
			session_destroy();

		}