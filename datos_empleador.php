<?php
include_once 'conexion.php';
session_start();
if(!isset($_SESSION['rol']))
	{
		header('location: login.php');
	}
else
	{
		if($_SESSION['rol'] !=1)
			{
				header('location: login.php');
			}
	}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/datos_empleador.css">	
			
	<title></title>
</head>	  

	<table>
		<tr>
			<td>
				<div  style="float:left; margin-bottom: 190px; margin-left: 50px; margin-top: 20px">
					<button type="button" class="inicial" ><a href="perfil_empleador.php">PAGINA INICIAL</a></button>	 
				</div>
			</td>
			<td width="100%">
				<div style=" text-align: center; margin-bottom: 120px " class="text">
					Datos Basicos
				</div>
			</td>	
			<td>
				<div style="margin-right: 15px">
					<h class="info" >empleador</h><br>
					<?php 
						$conexion=mysqli_connect('localhost','root','','insight') or die ('problemas en la conexion');
						$usuario = $_SESSION['nombres'];
						echo '<h class="info">'.$usuario.'</h>'; ?><br>
					<h class="info" >empresa</h><br>
					<?php 
					$empresa = $_SESSION['empresa'];
					echo '<h class="info">'.$empresa.'</h>'; ?><br>
				</div>
			</td>		
			<td style="float:right; margin-top:10px">
					<?php $fotos = $_SESSION['foto'];
					echo "<img  src='imagenes/$fotos ?>' width='190' height='190'>";
					?>
					<br>
					
					
					
					<input id="file-upload" type="file"/>
					
			</td>	
		</tr>	
	</table>	

<body background="imagenes/foto.jpg" >

	<form action="#" method="POST" style="margin-left: 5px">
				<br><br>
			<label  class="form-label" >NOMBRES Y APELLIDOS:</label><br>
				<input type="text" class="form-control" name="nom_ape"><br><br><br>
			<label  class="form-label" >CIUDAD:</label>&snpb;&snpb;&snpb;&snpb;&snpb;<label  class="form-label" >CELULAR:</label><br>
				<input type="text" class="ciudad" name="ciudad">&snpb;&snpb;<input type="text" class="ciudad" name="celular"><br><br>
			<label  class="form-label" >CORREO:</label><br>
				<input type="email" class="form-control" name="correo"><br><br><br>
			<label  class="form-label" >NOMBRE DE EMPRESA:</label><br>
				<input type="text" class="form-control" name="empresa"><br><br><br>
			<label  class="form-label" >NUMERO DE IDENTIFICACION:</label><br>
				<input type="text" class="ciudad" name="nit"><br><br><br>
			<label  class="form-label" >NUMERO DE CONTACTO:</label><br>
				<input type="text" class="ciudad" name="numero_contacto"><br><br>
		     
			<button style="float: left; margin-left: 100px" type="submit"  name="enviar">Actualizar Perfil</button>
	</form>
				<form action="inicio_sesion.php" method="POST">
		<button type="submit" class="inicial" name="cerrar_sesion"style="width: 150px; height:40px; float:right; margin-left:50px; margin-right:10px; font-family: cursive; color:white; ">CERRAR SESION</button>
	</form>
		

	<button  style="float: right;" type="button" class="inicial">Soporte Tecnico</button>	
</body>
</html>

<?php

	if(isset($_POST['enviar'])){
		header('location: perfil_empleador.php');
		$nom_ape=$_POST['nom_ape'];
		$ciudad=$_POST['ciudad'];
		$celular=$_POST['celular'];
		$correo=$_POST['correo'];
		$empresa=$_POST['empresa'];
		$nit=$_POST['nit'];
		$numero_contacto=$_POST['numero_contacto'];
		$id = $_SESSION['id'];

		$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');

		$guardar="INSERT INTO empleador(id_user,nom_ape,ciudad,correo,empresa,nit,numero_contacto,celular) values ('$id','$nom_ape','$ciudad','$correo','$empresa','$nit','$numero_contacto','$celular')";

		$ejecutar=mysqli_query($conexion,$guardar);

		if($ejecutar){
				
		}
		else{
			echo"<script> 
			alert('no se puede insertar') 
			</script>";
			}
	}


?>

