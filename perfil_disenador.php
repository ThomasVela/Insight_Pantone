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
<link rel="stylesheet" type="text/css" href="css/p_disenador.css">	
<link rel="stylesheet" type="text/css" href="css/di_dis.css">
	<title></title>
</head>
<body background="imagenes/foto.jpg" >

	<table  >
		<tr>
			<td align="left">
				<form action="inicio_sesion.php" method="POST" >
					<input type="submit" name="cerrar_sesion" id="button1" value="CERRAR SESION" style="width: 150px; margin-bottom: 170px;"  >
				</form>
			</td>
			<td  width="100%">
				<br>
				<div style="float:right;width:100%;">
					<?php
					$usuario = $_SESSION['nombres'];
					echo '<h class="info">'.$usuario.'</h>';?>
					<br><br><h class="info" >diseñador</h>
					<br><br><br><br><h class="info" >estado actual:</h>
					<br><br><h class="info" >no contratado</h>
				</div>
			</td>
			<td>
				<p>		
				<?php $foto = $_SESSION['foto'];
				$id = $_SESSION['id'];
				$idd=$id; 
				echo "<img  src='imagenes/$foto ?>' width='200' height='200'>";?></p>

				<p><a href="editar perfil"></a></p>		
				<center>	
				<p><a href="editar_perfil.php" class="link-light" style="position		:;">editar perfil</a></p>
				</center>
			</td>
		</tr>	
	</table>

	<br><br>



	<div class="funciones">
		<div id="tabla">
		<br><a href="empleo.php"><button type="button" class="botones" id="boton">ver ofertas disponibles</button></a>
		<br><br><a href="mis_diseños.php"><button type="button" class="botones" id="boton"> tus diseños</button></a>
		<br><br><a href="bazar.php?variable=<?php $id;?> "><button type="button" class="botones" id="boton">ver bazar</button></a><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><button type="button" class="botones" id="boton">reportar problemas</button>
		<br><br><button type="button" class="botones" id="boton">ayuda</button>
	</div>
		</div>	
	
</body>
</html>


