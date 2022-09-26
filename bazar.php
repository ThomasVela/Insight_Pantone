<?php
include_once 'conexion.php';
session_start(); 




?>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="css/bazar.css">  
   <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INSIGHT PANTONE</title>
    <link rel="stylesheet" type="text/css" href="probando.css">
  </head>

          <div style="margin-left: 30px;">
          <center><font face="forte" color="white" class="a"><h1>BAZAR PANTONE</h1></font></center>
          </div>
  <body background="imagenes/foto.jpg" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<form action="Bperfil.php" method="POST">
<div class="field" id="searchform"> 
  
    <input type="text" id="searchterm" placeholder="Escribe el nombre del diseñador" name="buscar" />
    <input type="submit" id="search" value="Find">
</div>
</form>

    <table>
      <tr>
        <td width="">
          
        </td>
        
        <!--<td width="100%">
          <div align="right" style="float: right;">
          <a href="inicio_sesion.php"><button type="button" id="boton" style="float: ; margin-right: ">INGRESAR</button></a>
          <a href="registrarse.php"><button type="button" id="boton" style="float: ;margin-top: 10px; width: 130px">REGISTRARSE</button></a>
          </div>
        </td>-->  
    </tr> 
   </table> 


  <table>
    <tr>
     <td>
        <?php 
        
        $conexion=mysqli_connect('localhost','root','','insight') or die ('problems en la conexion');

        $consulta="SELECT * FROM publicacion  ";
        $ejecutar=mysqli_query($conexion,$consulta);

        $i=0;
        while ($fila=mysqli_fetch_array($ejecutar)) {
          $desc=$fila['descripcion'];
          $fotop=$fila['fotop'];
          $id_p=$fila['id_d'];
        $i++;
          $query="SELECT * FROM disenador WHERE id_user='$id_p' ";
          $ejecutarA=mysqli_query($conexion,$query);

          $i2=0;
          while ($filaA=mysqli_fetch_array($ejecutarA)) {
            $nom=$filaA['nom_ape'];
          $i2++;
        
        ?>
        
        
        <div style="display:inline-block;vertical-align:130px; "> 
          <center>
       <p style="margin-top: 50px  font-family: cursive; font-size: 24; "><?php echo "Nom: ".$desc ?></p></center>   
        <?php echo "<img  style=margin-right:150px; src='files/$fotop' alt='img' class='diseño';text-align: center;/>";?> <br>
        <center><p href="#" style="font-size: 24;"><?php echo $nom ?></p></center>
        </div>

       
        
        <?php }} ?>
      </td>
    </tr>
  </table>
<!--
</div>

<div style="display:inline-block;vertical-align:top;">
<img src="img1.jpg" alt="img"/>
</div>
<div style="display:inline-block; margin-top:250px;">
  <a href="">@Diseñador</a>
<p>
Nombre proyecto
</p>

</div>-->


  </body>
</html>
