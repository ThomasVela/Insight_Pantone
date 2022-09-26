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
					$consulta="SELECT * FROM empleador WHERE id_user='$id'";
	 				$ejecutar=mysqli_query($conexion,$consulta);
					 $i=0;
					 while ($fila=mysqli_fetch_array($ejecutar)){
						$nom_ape=$fila['nom_ape'];
						$ciudad=$fila['ciudad'];
						$celular=$fila['celular'];
						$correo=$fila['correo'];
						$empresa=$fila['empresa'];
						$nit=$fila['nit'];
						$numero_contacto=$fila['numero_contacto'];
						$foto=$fila['foto'];

				
					 ?>
					<label>Nombre Y Apellido</label><br>
					<p><?php echo $nom_ape ?></p>
					<label>Ciudad</label><br>
					<p><?php echo $ciudad ?></p>
					<label>Celular</label><br>
					<p><?php echo $celular ?></p>
					<label>Correo</label><br>
					<p><?php echo $correo ?></p>
					<label>Empresa</label><br>	
					<p><?php echo $empresa ?></p>
				</div>
			</td>
			<td >
				<div class="text" style="margin-left: 20px; margin-bottom: px;">
				<label>Nit</label><br>
				<p><?php echo $nit ?></p>
				<label>Numero de contacto</label><br>
				<p><?php echo $numero_contacto ?></p>

				</div>
			

		
		<?php } ?>

		
	<input type="checkbox" id="btn-modal">
	<label for="btn-modal" class="lbl-modal" style="float:right; background-color:#0b5292;font-family: cursive;color:white; margin-top: 10px ">Editar Perfil</label>
	<div class="modal">
		<div class="contenedor">
			<header>Editar perfil!</header>
			<label for="btn-modal" style="	position: absolute;top:10px;right:10px;color:#fff;font-size:15px;cursor: pointer;">X</label>
			<div class="contenido">
			<table>
				<tr>
					<td>
					<form action="actualizarE.php" method="POST">	
						<?php $id = $_SESSION['id']; ?>
						<label  class="form-label" >NOMBRES Y APELLIDOS:</label><br>
							<input type="text" class="form-control" name="nom_ape"><br><br>
						<label  class="form-label" >CIUDAD:</label><br>
							<input type="text" class="ciudad" name="ciudad"><br><br>
						<label  class="form-label" >CELULAR:</label><br>	
							<input type="text" class="ciudad" name="celular"><br><br>
						<label  class="form-label" >CORREO:</label><br>
							<input type="email" class="form-control" name="correo"><br><br><br>
						<label  class="form-label" >NOMBRE DE EMPRESA:</label><br>
							<input type="text" class="form-control" name="empresa"><br><br><br>
					</td>
					<td>
						<label  class="form-label" >NUMERO DE IDENTIFICACION:</label><br>
							<input type="text" class="ciudad" name="nit"><br><br><br>
						<label  class="form-label" >NUMERO DE CONTACTO:</label><br>
							<input type="text" class="ciudad" name="numero_contacto"><br><br>
							<input type="submit" name="actualizar" id="button1" value="actualizar" style="margin-left: 450px; margin-top: 150px">
		     		</form>
		     		<form action="PborrarE.php" method="POST">		
						<input type="submit" name="Bperfil" id="button1" value="eliminar perfil"  style="margin-top:10px; width: 120px; margin-left: 450px">
					</form>	
		     		</td>
		     	</tr>
		     </table>
			</div>
		</div>
	</div>
		</td>	
	</tr>				
</table>			
			

</body>
</html>



