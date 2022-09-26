<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/registrarse.css">	
	<title></title>
</head>
<body background="imagenes/fondo.jpg">
	<form method="POST" action="#" >
	<div class="registrarse">

		<div id="registro">
		<center>
		<br><h1>Registrarse</h1><br>

		  <label class="form-label"><b>NOMBRES:</b></label>
		    <input style="border-radius:20px;" type="text" class="form-control" name="nombres" ><br>	

			<br><div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label"><b>CORREO:</b></label>
			<input style="border-radius:20px;"type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="correo">
			</div>

		   <br><label class="form-label"><b>EMPRESA (solo si es empleador):</b></label>
		    <input style="border-radius:20px;" type="text" class="form-control" name="empresa"><br>


		   <br> <div class="mb-3">
		   <label for="exampleInputPassword1" class="form-label"><b>CONTRASEÑA:</b></label>
		   <input style="border-radius:20px;" type="password" class="form-control" id="exampleInputPassword1" name="clave">
		   </div>
		  

		   <br> <div class="mb-3">
		   <label for="exampleInputPassword1" class="form-label"><b><b>COMFIRMAR CONTRASEÑA:</b></b></label>
		   <input style="border-radius:20px;" type="password" class="form-control" id="exampleInputPassword1">
		   </div><br> 

		      <select  name="idrol">
		        <option value="1"  name="idrol">EMPLEADOR</option>
		        <option value="2"  name="idrol">DISEÑADOR</option>
		      </select>
         <br><br> 
		  <b >FOTO DE PERFIL:</b>						
		  <label for="file-upload" class="custom-file-upload">
    		<i class="fa fa-cloud-upload" ></i>
    		Subir foto
			</label>
			<input id="file-upload" type="file" name="foto" />
  
		 <br><br><br> 
		  <input type="submit" value="registrarse" class="botton" name="guardar" > 
		</center>	
		</div>
	</div>
		</form>

</body>
</html>

		<?php 
		include 'conexion.php';
			if(isset($_POST['guardar'])){
				header('Location: inicio_sesion.php');
 				$nombres=$_POST['nombres'];
				$correo=$_POST['correo'];
				$empresa=$_POST['empresa'];
				$clave=$_POST['clave'];
				$foto=$_POST['foto'];
				$idrol=$_POST['idrol'];
				
				
				$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');
				
				$guardar="INSERT INTO usuarios(idrol,nombres,correo,empresa,contrasena,foto) values ('$idrol','$nombres','$correo','$empresa','$clave','$foto')";
				
				$ejecutar=mysqli_query($conexion,$guardar);
				if($ejecutar){
				
				}
				else{
					echo"<script> 
					alert('no se puede insertar') </script>";
				}
			}
		?>	
		  

