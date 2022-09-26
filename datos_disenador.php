<?php
include_once 'conexion.php';
session_start(); 

 if(!isset($_SESSION['rol']))
	{
		header('location: login.php');
	}
else
	{
		if($_SESSION['rol'] !=2)
			{
				header('location: login.php');
			}
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/datos_disenador.css">
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">	
	<title></title>

	<table>
		<tr>
			<td>
				<div style="float:left; margin-bottom: 200px; margin-left: 50px;">
					<button type="submit" id="button1" style="float:left">PAGINA INICIAL</button><br><br>
				</div>
			</td>
			<td width="100%">
				<div id="text" style="text-align: center; margin-bottom: 150px" >
				<p>Datos Basicos</p>
				</div>				
			</td>
			<td>
				<div class="text" style="margin-right: 15px">
					<?php 
					$conexion=mysqli_connect('localhost','root','','insight') or die ('problemas en la conexion');
					$usuario = $_SESSION['nombres'];
					echo '<h class="info">'.$usuario.'</h>';

 ?>
							
					<p>Diseñador</p>
				</div>
			</td>
			<td>
				<div class="text" style="float:right; margin-top:10px">
					<?php $fotos = $_SESSION['foto'];
					echo "<img  src='imagenes/$fotos ?>' width='190' height='190'>";
					?>
					<br>
						
				</div>
			</td>
		</tr>
	</table>

</head>
<body background="imagenes/foto.jpg">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<form action="#" method="POST" >
	<table>
		<tr>
			<td>
				<div  class="text" style="margin-left: 50px;">
					<label>Nombre Y Apellido</label><br>
					<input type="text" name="nom_ape" class="text2" placeholder="Nombres Apellido" style="width: 400px"><br><br>
					<label>Correo</label><br>
					<input type="text" name="correo" class="text2" placeholder="ejemplo@gmail.com" style="width: 400px"><br><br>
					<label>Numero de Contacto</label><br>
					<input type="text" name="num_contacto" class="text2" placeholder=""><br><br>
					<label>C.C</label><br>
					<input type="text" name="cc" class="text2" placeholder=""><br><br>
					<label>Nivel de educación</label><br>	
					<select name="educacion" class="text"  style="color:black">
						<option value="Básico Primaria">Básico Primaria</option>
						<option value="Básico Secundaria">Básico Secundaria</option>
						<option value="Bachiller">Bachiller</option>
						<option value="Tecnico">Tecnico</option>
						<option value="Tecnologo">Tecnologo</option>
						<option value="Universitario">Universitario</option>
						<option value="Maestria">Maestria</option>
					</select>
				</div>
			</td>
			<td>
				<div class="text" style="margin-left: 50px; margin-bottom: 158px;">
				<label>Ciudad</label><br>
				<input type="text" name="ciudad" class="text2" placeholder=""><br><br>
				<label>Celular</label><br>
				<input type="number" name="celular" class="text2" placeholder=""><br><br>
				<label>Genero</label><br>
				<input type="text" name="genero" class="text2" placeholder=""><br><br>
				</div>
			</td>
			<td>
				<div class="text" style="margin-left: 50px; margin-bottom: 114px;">
					<label>Fecha de nacimiento</label><br>
					<input type="date" name="fecha_nacimiento" class="text2" placeholder="" style="width: 300px;"><br><br>
					<textarea rows="4" cols="25" placeholder="Descripción de su biografia" name="bio"></textarea><br><br>
					Hoja de Vida<br>
					<label for="file-upload" class="custom-file-upload">
    				<i class="fa fa-cloud-upload"></i>
    				Subir archivo PDF
					</label>
					<input id="file-upload" type="file" name="hoja_vida" />

				</div>	
			</td>

		</tr>	
	</table>

	<input type="submit" name="actualizar" value="Actulizar Perfil" id="button1" style="float: left; margin-top:50px; margin-left: 50px"><br>
</form>
	<form action="inicio_sesion.php" method="POST">
		<input type="submit" name="cerrar_sesion" value="CERRAR SESION" style="width: 100px; float:right;">
	</form>
</body>
</html>


<?php
	
	if(isset($_POST['actualizar'])){
		header('location: perfil_disenador.php');
		$nom_ape=$_POST['nom_ape'];
		$correo=$_POST['correo'];
		$num_contacto=$_POST['num_contacto'];
		$cc=$_POST['cc'];
		$educacion=$_POST['educacion'];
		$ciudad=$_POST['ciudad'];
		$celular=$_POST['celular'];
		$genero=$_POST['genero'];
		$fecha_nacimiento=$_POST['fecha_nacimiento'];
		$bio=$_POST['bio'];
		$hoja_vida=$_POST['hoja_vida'];
		$id = $_SESSION['id'];

		$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');

		$guardar="INSERT INTO disenador(id_user,nom_ape,correo,num_contacto,cc,educacion,ciudad,celular,genero,fecha_nacimiento,bio,hoja_vida) values ('$id','$nom_ape','$correo','$num_contacto','$cc','$educacion','$ciudad','$celular','$genero','$fecha_nacimiento','$bio','$hoja_vida')";

			$ejecutar=mysqli_query($conexion,$guardar);
			if($ejecutar){
				
			}else{

			}			
	


	}


?>
