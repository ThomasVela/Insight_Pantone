<?php 
	include_once 'conexion.php';
	session_start();

		if(isset($_POST['borrar'])){
			header('location: mis_diseños.php');


			$Etitulo=$_POST['Etitulo'];

			$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');



			$eleminar="DELETE FROM publicacion WHERE titulo='$Etitulo'";
						
			$ejecutar=mysqli_query($conexion,$eleminar);


		}


?>