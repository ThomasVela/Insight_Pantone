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
	<html>
	<head>

	<link rel="stylesheet" type="text/css" href="css/mis_diseños.css">	

		<title></title>
	</head>
	<body  background="imagenes/fondo.jpg">
		<table>
			<tr>
				<td>		
					<a href="bazar.php"><button style="float: left; " type="button" class="inicial">PAGINA INICIAL</button></a>
				</td>
				<td >
				<div  style="text-align: center; margin-left: 650px " >
				<p style="font-size:  50px">Mis diseños</p>
				</div>	 
				</td>
				<td >
					<form action="inicio_sesion.php" method="POST" >
						<input type="submit" name="cerrar_sesion" class="inicial" value="CERRAR SESION" style="float:right; margin-left: 560px" >
					</form>
				</td>
			<tr>
		</table>

			
			
		<table  style="float: right;">
			<tr><th><br>
			<?php $foto = $_SESSION['foto']; 
			echo "<img  src='imagenes/$foto ?>' width='190' height='190'>";?>
			</th></tr>
			<tr><td>	
			<center>	
			<p><a href="editar_perfil.php" class="link-light" style="position:;">editar perfil</a></p></td></tr>
			</center>
		</table>

		<br><br>
		<?php 

		$usuario = $_SESSION['nombres'];
		echo '<h class="info">'.$usuario.'</h>';
  ?>
		<br><br><h class="info" >diseñador</h>





	

	


				<?php 
				$id = $_SESSION['id'];
				$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');

	 			$consulta="SELECT * FROM publicacion WHERE id_d='$id'";
	 			$ejecutar=mysqli_query($conexion,$consulta);

	 			$i=0;
	 			while ($fila=mysqli_fetch_array($ejecutar)) {
	 				$desc=$fila['descripcion'];
	 				$fotop=$fila['fotop'];
	 			$i++;
	 			?>
				<div style="display:inline-block;vertical-align:top;">
				<center><p><?php echo $desc ?></p></center>		
				<?php echo "<img src='files/$fotop' alt='img' class='diseño'/>" ?></div>
				<?php } ?>

	<br><br><br>	
	<input type="checkbox" id="btn-modal" >
	<label for="btn-modal" class="lbl-modal" style="float: right;background-color:#0b5292;font-family: cursive;color:white;">Subir o eliminar proyecto</label>
	<div class="modal" style="float: right;">
		<div class="contenedor">
		<table>
			<header>Subir Proyecto</header>
			<label for="btn-modal">X</label>
			<div class="contenido">

				<tr>
					<td style="float: left; border-right: black solid 1px;">
				<form action="subir.php" method="POST" enctype="multipart/form-data">
					<h3>titulo de tu diseño</h3>
					<input type="text" name="titulo">
					<h3>Describe tu diseño</h3>					
					<textarea  placeholder="Descripcion de tu publicacion" style="width: 380px; height: 80px;" name="descripcion"></textarea>
					<br><br>
					
					<input type="file" id="seleccionArchivos"  name="foto"><br>
					<img src="imagenes/camara.jpg" 	id="imagenPrevisualizacion" alt="" class="temporal" width="261" height="196">
					<br>
					<input type="submit" name="upload" value="Subir" style="background-color:#0b5292;font-family: cursive;color:white;width: 80px;padding: 8px;border: 1px solid white; " >
					
				</form>
					</td>
					<td style="float: right; margin-left: 20px">
						<h3>Eliminar proyecto</h3>
					<form action="borrar.php" method="POST">	
						<p style="color:black">Digite el titulo del diseño que quiere borrar:</p>
						<input type="text" name="Etitulo"><br><br>
						<input type="submit" name="borrar" value="borrar" class="inicial"  style="float:right; width: 100px;margin-top: 350px;margin-right: 30px">
						</form>						
						<table border="1" align="center" bgcolor="white">
							<tr>
								<th>Titulo</th>
								<th>Descripcion</th>
							</tr>
							<?php 
							$id = $_SESSION['id'];
							$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');
			
	 						$consulta="SELECT * FROM publicacion WHERE id_d='$id'";
	 						$ejecutar=mysqli_query($conexion,$consulta);
			
	 						$i=0;
	 						while ($fila=mysqli_fetch_array($ejecutar)) {
	 							$titulo=$fila['titulo'];
	 							$desc=$fila['descripcion'];
	 						$i++;
	 						?>
							
								<tr>
									<td>
										<p style="color: black"><?php echo $titulo ?></p>
									</td>
									<td>
										<p style="color: black"><?php echo $desc ?></p>		
									</td>							
								</tr>

								<?php } ?>	
								
	

							</table>
												
					</td>
				</tr>
			</table>	
				<script>
					const $seleccionArchivos=document.querySelector("#seleccionArchivos"),
					$imagenPrevisualizacion=document.querySelector("#imagenPrevisualizacion");
					$seleccionArchivos.addEventListener("change",()=>{const archivos = $seleccionArchivos.files;
						if(!archivos || !archivos.length){
							$imagenPrevisualizacion.src="";
							return;
						}
						const primerArchivo=archivos[0];
						const objectURL=URL.createObjectURL(primerArchivo);
						$imagenPrevisualizacion.src=objectURL;
					});

				</script>
				</div>
			</div>
		</div>



			




	</body>
	</html>
