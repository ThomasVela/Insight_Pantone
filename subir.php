
<?php

	include_once 'conexion.php';
	session_start();
		if(isset($_POST['upload'])){
			header('location: mis_diseños.php');

			$carpeta= "files/"; 

			opendir($carpeta); 
			$destino= $carpeta.$_FILES['foto']['name']; 

			copy($_FILES['foto']['tmp_name'], $destino);

			$nombre=$_FILES['foto']['name'];

			$titulo=$_POST['titulo'];
			$descripcion=$_POST['descripcion'];
			$foto=$_FILES['foto']['name'];
			$id = $_SESSION['id'];

			$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');

			$guardar="INSERT INTO publicacion(id_d,titulo,descripcion,fotop) values ('$id','$titulo','$descripcion','$foto')";
						
			$ejecutar=mysqli_query($conexion,$guardar);


	

			
	

}
?>