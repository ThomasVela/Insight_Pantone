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
<head>
<link rel="stylesheet" type="text/css" href="css/p_empleador.css">
<link href="css/di_dis.css" rel="stylesheet" type="text/css"> 
	<title></title>
</head>
<body background="imagenes/foto.jpg" >


	<table >
		<tr>
			<td align="left">
				<form action="inicio_sesion.php" method="POST">
					<input type="submit" name="cerrar_sesion"   value=" CERRAR SESION" style=" float:right;        background-color:#0b5292;font-family: cursive;color:white;width: 150px;padding: 8px;border: 1px solid white;border-radius: 40px; margin-bottom: 120px;">
				</form>

			</td>
						<td  width="100%">
				<br>
				<div style="float:right;width:100%;">
					<?php
					$usuario = $_SESSION['nombres'];
					echo '<h class="info">'.$usuario.'</h>';?>
					<br><br><h class="info" >empleador</h>

				</div>
			</td>
			<td>
				<div >
				<br><p>
				<?php
				$fotos = $_SESSION['foto'];
			
				echo "<img class='perfil' src='imagenes/$fotos' alt='usuario'>";
				?>
				</p>
		
				<center>	
				<p><a href="editar_perfilE.php" class="link-light">editar perfil		</a></p>
				</center>
			</div>
			</td>
		</tr>
	</table>
	

	<br><br>

	
	
	<div class="funciones" style="float:left"> 
		<div id="tabla">
		<br><a href="ofertas.php"><button type="button" class="botones" id="boton">publicar oferta</button>
		<br><br><a href="bazar.php"><button type="button" class="botones" id="boton">ver bazar</button></a>
		<br><br><input type="checkbox" id="btn-modal" >
	<label for="btn-modal" class="lbl-modal" style="float:center; margin-left:20px;">Diseñadores disponibles</label>

	<div class="modal" style="float: right;">

		<div class="contenedor">

			<header>Diseñadores Disponibles</header>
			<label for="btn-modal" style="width:600px; text-align: right; margin-right:20px;">X</label>

			<div class="contenido">
				
	        <table border="3" align="center" style="width: 920px; font:cursive; color: black;">
	      

	          <tr>  
	            <th>ID</th>
	            <th>NOMBRE</th>
	            <th>EMAIL</th>
	            <th>CIUDAD</th>
	            <th>ESTADO</th>
	            <th>VER PERFIL</th>
	          </tr>
	        <?php
	        $conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');
	        $observar = "SELECT * FROM disenador";
	        $ejecutar=mysqli_query($conexion,$observar);
	          $contador =0;
	          while ($filas=mysqli_fetch_array($ejecutar)) 
	        {
	            $id =       $filas['id'];
	            $usuario =  $filas['nom_ape'];
	            $correo =    $filas['correo'];
	            $ciudad = $filas['ciudad'];
	            $estado= $filas['estado'];
	            $contador++;
	          ?>
	          <tr align="center"> <?php if ($estado==0)
	          {?>
	              <td><?php echo $id ?></td>
	              <td><?php echo $usuario ?></td>
	              <td><?php echo $correo ?></td>
	              <td><?php echo $ciudad?></td>
	              <td><?php
	              if ($estado==0)
	              {
	              echo "Disponible";}
	            ?>
	             </td>
	              <td><a style="color:blue;" href="Bperfil.php? editar= <?php echo $id; ?>">Visitar</a></td>
	          </tr>
	          <?php
	        }
	        ?>    
	        <?php
	        
	        }
	        ?>
	       

	<?php
	if(isset($_GET['editar']))
	{include_once 'POV_E_FINAL.php';}
	?>
	</table>
			</div>

		</div>				
 </div>



		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><button type="button" class="botones" id="boton">reportar problemas</button>
		<br><br><button type="button" class="botones" id="boton">ayuda</button>
		</div>
	</div>		

</body>
</html>



