<?php
include_once 'conexion.php';
session_start(); 



?>
	<!DOCTYPE html>

<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/Bperfil.css">
	<meta charset="utf-8">
 	
	<title></title>

	<table>
		<tr>
			<td >
				<div style="float:left;  margin-left: 50px;">
					<a href="bazar.php"><button type="submit" id="button1" style="float:left;width: 150px;">PAGINA INICIAL</button></a><br><br>
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
					if(isset($_POST['buscar'])){
					$conexion=mysqli_connect('localhost','root','','insight') or die ('problemas en la conexion');

					$nom=$_POST['buscar'];
					$consulta="SELECT * FROM disenador WHERE nom_ape='$nom' ";
	 				$ejecutar=mysqli_query($conexion,$consulta);
					 $i=0;
					 while ($fila=mysqli_fetch_array($ejecutar)){
					 	$id_user=$fila['id_user'];
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
			</td>		
		
		<?php }} ?>
		</tr>
	</table>

					<?php 
				
				$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');

	 			$consulta="SELECT * FROM publicacion WHERE id_d='$id_user'";
	 			$ejecutar=mysqli_query($conexion,$consulta);

	 			$i=0;
	 			while ($fila=mysqli_fetch_array($ejecutar)) {
	 				$desc=$fila['descripcion'];
	 				$fotop=$fila['fotop'];
	 			$i++;
	 			?>
				<div style="display:inline-block;vertical-align:top;">
				<center><p style="color: white;"><?php echo $desc ?></p></center>		
				<?php echo "<img src='files/$fotop' alt='img' class='diseño'/>" ?></div>
				<?php } ?>

</body>
</html>



	