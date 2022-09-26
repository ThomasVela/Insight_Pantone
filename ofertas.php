<?php
include_once 'conexion.php';
session_start();
if(!isset($_SESSION['rol']))
	{
		header('location: inicio_sesion.php');
	}
else
	{
		if($_SESSION['rol'] !=1)
			{
				header('location: inicio_sesion.php');
			}
	}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="css/oferta.css"></head><br>
	<a href="perfil_empleador.php"><button type="submit" class="btn btn-primary">PAGINA INICIAL</button></a>
	<body background="imagenes/fondo.jpg"><br> 
	<table style="float: right; color:white; display:block ;">
		<tr>
			<th>
				<?php 
					$conexion=mysqli_connect('localhost','root','','insight') or die ('problemas en la conexion');
					$usuario = $_SESSION['nombres'];
					echo '<p>'.$usuario.'</p>'; 
				?>
				<?php
					$rol=$_SESSION['rol'];
					if ($rol==1)
						{
							echo '<p>',"Empleador",'</p>';
						}
				?>
			</th>
			<th>
				<?php $fotos = $_SESSION['foto'];
					echo "<img  class='perfil' src='imagenes/$fotos' alt='usuario'style='vertical-align:initial ; padding-top: 0px; padding-bottom: 0px;'?>";
				?>
			</th>
		</tr>
		<tr>
			<th>
				<td align="center"><a href="#" style="color:white;">Ver perfil</a></td>
			</th>
		</tr>
	</table>
	<form method="POST" action="#">
	<div class="ofertas">
		<div id="oferta" style="margin-left:250px;">
		<center>
		<h1>AREA PARA PUBLICAR AREA DE EMPLEO</h1><br>
		<label class="form-label"><b>CARGO A DESEMPEÑAR:</b></label>
		<input style="border-radius:20px; border: black solid;" type="text" class="form-control" name="cargo"><br><br>
		<label for="exampleInputPassword1" class="form-label"><b>CIUDAD:</b></label>
		<input style="border-radius:20px; border: black solid;" type="text" class="form-control" id="exampleInputciudad" aria-describedby="ciudadHelp" name="ciudad"><br><br>
		<label class="form-label"><b>DIRECCION:</b></label>
		<input style="border-radius:20px; border: black solid;" type="text" class="form-control" id="exampleInputdireccion" aria-describedby="direccionHelp" name="direccion"><br><br>
		<label class="form-label"><b>SALARIO:</b></label>
		<input  style="border-radius:20px; border: black solid;" type="text" class="form-control" id="exampleInputNOMBRE" aria-describedby="NOMBREHelp" name="salario"><br><br>
		<label class="form-label"><b>HORARIO:</b></label>
		<input style="border-radius:20px; border: black solid;" type="time" class="form-control" name="horario"><br><br>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label"><b>DESCRIPCION DEL CARGO:</b></label><br><br>
				<textarea style="border-radius:20px; width: 600px; height: 200px;border: black solid;"class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion sobre el cargo a desempeñar en la vacante" name="descripcion"></textarea>
			</div><br>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label"><b>CORREO DE CONTACTO:</b></label>
				<input style="border-radius:20px; border: black solid;"type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="correo">
			</div><br> 
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label"><b>NUMERO DE CONTACTO:</b></label>
				<input style="border-radius:20px; border: black solid;" type="text" class="form-control" name="num"><br><br>
				<button type="submit" name="publicar" class="btn btn-primary">ENVIAR INICIAL</button>
			</div><br>

		</center>
		</div>

	</div>
	
	
	</form>
	<?php
		if(isset($_POST['publicar']))
		{
			$cargo=$_POST['cargo'];
			$ciudad=$_POST['ciudad'];
			$direccion=$_POST['direccion'];
			$salario=$_POST['salario'];
			$horario=$_POST['horario'];
			$descripcion=$_POST['descripcion'];
			$correo=$_POST['correo'];
			$num=$_POST['num'];
			echo"se esta ejecutando";
			$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');
			$guardar="INSERT INTO oferta(cargo,ciudad,direccion,salario,horario,descripcion,correo,num) values ('$cargo','$ciudad','$direccion','$salario','$horario','$descripcion','$correo','$num')";
			$ejecutar=mysqli_query($conexion,$guardar);
			if($ejecutar)
				{
					echo "se publico correctamente";
					echo"<script> alert('Se publico correctamente')</script>";
				}
			else
				{
					echo"<script> 
					alert('no se puede publicar') 
					</script>";
				}
		}
	?>
	</body>	 
</html>