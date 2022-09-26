<?php
include_once 'conexion.php';
session_start(); 

 if(!isset($_SESSION['rol']))
	{
		header('location: login.php');
	}
else
	{
		if(($_SESSION['rol'] !=2) and ($_SESSION['rol'] !=1))
			{
				header('location: login.php');
			}
	}


?>
	<!DOCTYPE html>

<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/editar_perfil.css">
	<meta charset="utf-8">
 	
	<title></title>

	<table>
		<tr>
			<td >
				<div style="float:left;  margin-left: 50px;">
					<a href="perfil_disenador.php"><button type="submit" id="button1" style="float:left;width: 150px;">PAGINA INICIAL</button></a><br><br>
				</div>
			</td>
			<td width="100%">
				<div id="text" style="text-align: center; margin-bottom: px" >
				<h1 id="text" style="margin-right: 150px ;">Perfil</h1>
				</div>				
			</td>	
			<td>
				<form action="inicio_sesion.php" method="POST">
					<input type="submit" name="cerrar_sesion" value="CERRAR SESION" id="button1" style="width: 125px; float:right;">
				</form>
			</td>	
		</tr>
	</table>

</head>
<body background="imagenes/foto.jpg">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<form action="actualizar.php" method="POST" >
	<table id="table" >
		<tr>
			<td style="  border-right: black solid 1px;">

				<div class="text" style="float:left; margin-top:px">
					<?php $fotos = $_SESSION['foto'];
					echo "<img  src='imagenes/$fotos ?>' width='200' height='200'>";
					?>
					<br>
						
				</div>
			</td>			
					
			<td style="  border-right: black solid 1px;">
				<div  class="text" style="margin-left: 20px;">
					<?php
					$conexion=mysqli_connect('localhost','root','','insight') or die ('problemas en la conexion');

					$id = $_SESSION['id'];
					$consulta="SELECT * FROM disenador WHERE id_user='$id'";
	 				$ejecutar=mysqli_query($conexion,$consulta);
					 $i=0;
					 while ($fila=mysqli_fetch_array($ejecutar)){
						$nom_ape=$fila['nom_ape'];
						$correo=$fila['correo'];
						$num_contacto=$fila['num_contacto'];
						$cc=$fila['cc'];
						$educacion=$fila['educacion'];
						$ciudad=$fila['ciudad'];
						$celular=$fila['celular'];
						$genero=$fila['genero'];
						$fecha_nacimiento=$fila['fecha_nacimiento'];
						$bio=$fila['bio'];
						$hoja_vida=$fila['hoja_vida'];
				
					 ?>
					<label>Nombre Y Apellido</label><br>
					<p><?php echo $nom_ape ?></p>
					<label>Correo</label><br>
					<p><?php echo $correo ?></p>
					<label>Numero de Contacto</label><br>
					<p><?php echo $num_contacto ?></p>
					<label>C.C</label><br>
					<p><?php echo $cc ?></p>
					<label>Nivel de educación</label><br>	
					<p><?php echo $educacion ?></p>
				</div>
			</td>
			<td style="  border-right: black solid 1px;">
				<div class="text" style="margin-left: 20px; margin-bottom: px;">
				<label>Ciudad</label><br>
				<p><?php echo $ciudad ?></p>
				<label>Celular</label><br>
				<p><?php echo $celular ?></p>
				<label>Genero</label><br>
				<p><?php echo $genero ?></p>
				</div>
			</td>
			<td>
				<div class="text" style="margin-left: 20px; margin-bottom: px;">
					<label>Fecha de nacimiento</label><br>
					<p><?php echo $fecha_nacimiento ?></p>
					<label>Descripción de su biografia></label><br>
					<p><?php echo $bio ?></p>
					<label>Hoja de Vida</label><br>
					<p><?php echo $hoja_vida ?></p>


				</div>	
		
		<?php } ?>
					
			
				<input type="checkbox" id="btn-modal" >
				<label for="btn-modal" class="lbl-modal" style="float:right; background-color:#0b5292;font-family: cursive;color:white; margin-top: 10px ">Editar perfil</label>
				<div class="modal">
					<div class="contenedor">
						<header class="text">Editar Perfil</header>
						<label for="btn-modal" style="	position: absolute;top:10px;right:10px;color:#fff;font-size:15px;cursor: pointer;">x</label>
						<div class="contenido">

<form>
	<table>
		<tr>
			<td>
				<div >
					<label>Nombre Y Apellido</label><br>
					<input type="text" name="nom_ape" class="text2" placeholder="Nombres Apellido" style="width: 300px"><br><br>
					<label>Correo</label><br>
					<input type="text" name="correo" class="text2" placeholder="ejemplo@gmail.com" style="width: 300px"><br><br>
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
				<div  style="margin-left: 50px; margin-bottom: 112px;">
				<label>Ciudad</label><br>
				<input type="text" name="ciudad" class="text2" placeholder=""><br><br>
				<label>Celular</label><br>
				<input type="number" name="celular" class="text2" placeholder=""><br><br>
				<label>Genero</label><br>
				<input type="text" name="genero" class="text2" placeholder=""><br><br>
				</div>
			</td>
			<td>
				<div  style="margin-left: 50px; margin-bottom: 95px;">
					<label>Fecha de nacimiento</label><br>
					<input type="date" name="fecha_nacimiento"  style="width: 200px;"><br><br>
					<textarea rows="4" cols="25" placeholder="Descripción de su biografia" name="bio"></textarea><br><br>
					<label>Hoja de Vida</label><br>
					<label for="file-upload" class="custom-file-upload" style="width:200px;height: 40px">
    				<i class="fa fa-cloud-upload"></i>
    				<p style="font-size: 20px;color: white">Subir archivo PDF</p>
					</label>
					<input id="file-upload" type="file" name="hoja_vida" />
				</div>	
			</td>

		</tr>

			<td>
				<input type="submit" name="actualizar" id="button1" value="Actualizar" style="margin-top: 10px">
</form>
<form action="Pborrar.php" method="POST">		
				<input type="submit" name="Bperfil" id="button1" value="eliminar perfil"  style="margin-top:10px; width: 120px">
</form>		
			</td>		
	

		
	</table>


						</div>
					</div>
				</div>				
			</td>

		</tr>	
	</table>



</form>

</body>
</html>



