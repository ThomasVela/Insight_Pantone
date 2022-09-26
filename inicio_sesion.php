<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/inicio_sesion.css">	

	<title></title>
</head>
<body  background="imagenes/foto.jpg"   >

		<form  action="#" method="POST" class="cuadro_sesion">
			
		
			<div id="inicio">
				<center>
				<br><br><font color="white"><h1>Iniciar Sesión</h1></font>
		
				<div class="form-floating mb-3">
					<font color="white"><label >EMAIL</label></font><br><br>
  					<input type="email" placeholder="correo" name="correo"><br><br><br>
  				</div>
				<div class="form-floating">
					<font color="white"><label for="floatingPassword">CONTRASEÑA</label>		</font><br><br>	
   					<input  type="password" placeholder="ingrese su contraseña" name="contrasena"><br>
  				</div>
  				
				<br><br><input style="background-color:#0b5292;font-family: cursive; color:white;width: 100px;padding: 8px; border: 1px solid black;" type="submit" name="" value="Ingresar">
				<br><br><br>
				</form>
				<a  class="link-light">¿olvidaste tu contraseña?</a>
				<p><a href="registrarse"></a></p>			
				<a href="registrarse.php">Registrarse</a>				
				</center>	
			</div>


			
<?php
	include_once 'conexion.php';
	session_start();
	if (isset($_POST['cerrar_sesion'])) 
		{
			session_unset();
			unset($_SESSION["correo"]);
			session_destroy();//header('Location:../login.php');
		}
	if (isset($_SESSION['rol'])) 
		{
		switch ($_SESSION['rol']) 
			{
			case 1:
				header('Location: perfil_empleador.php');
				break;
			case 2:
				header('Location: perfil_disenador.php');
				break;

			default:
				echo "no estoy en nada";
				break;
			}
		}

	

	if(isset($_POST['correo']) && isset($_POST['contrasena'])) 
		{
		$email = $_POST['correo'];
		$password = $_POST['contrasena'];



		$db = new Database();
		$query = $db->connect()->prepare('SELECT * FROM usuarios WHERE correo = :correo AND contrasena =:contrasena');
		$query->execute(['correo' =>$email, 'contrasena'=>$password]);
		$arreglofila = $query->fetch(PDO::FETCH_NUM);


		if ($arreglofila == true) 
				{	

					$rol = $arreglofila[1];
					$_SESSION['rol'] = $rol;
					switch($rol)
						{
						case 1: 
						$confirmacion=$arreglofila[7];
						$_SESSION['confirmacion']=$confirmacion;
						if($confirmacion<=0){

	 														
						header('Location: datos_empleador.php');
						}else{
							header('Location: perfil_empleador.php');
						}	
						break;
						case 2: 
				
						$confirmacion=$arreglofila[7];
						$_SESSION['confirmacion']=$confirmacion;
						if($confirmacion<=0){

	 												
							header('Location: datos_disenador.php');
						}else{
							header('Location: perfil_disenador.php');
						}
			
						break;
						default: "No estoy en nada";
						break;

					}
						$usuario=$arreglofila[2];
						$_SESSION['nombres']=$usuario;
						$empresa=$arreglofila[4];
						$_SESSION['empresa']=$empresa;	
						$fotos=$arreglofila[6];
						$_SESSION['foto']=$fotos;
						$id=$arreglofila[0];
						$_SESSION['id']=$id;

						$confirmacion=$arreglofila[7];
						$_SESSION['confirmacion']=$confirmacion;

						$conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');

						$update="UPDATE usuarios Set confirmacion=1 WHERE id ='$id'";

	 					$ejecutar=mysqli_query($conexion,$update);
	 					if($ejecutar){
	 					}else{

	 					}	

				}

		else{
			echo "Nombre de ususario o contraseña invalida!";
			}
		}
		
?>		
	
</body>
</html>
