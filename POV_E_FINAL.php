<!doctype html>
  
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INSIGHT PANTONE</title>
    <link rel="stylesheet" type="text/css" href="disenos.css"> 
       

  </head>

  <body background="imagenes/foto.jpg">
  <?php
  include_once 'conexion.php';
  ?>

           <font face="forte" color="white" class="a" style="width:1880px; height:100px ; ">
        <p style=" margin-right:500px; margin-top:5px; width:200px; height: 50px;">
           <button  href="#" type="button" class="b" style="width:150px; height:40px;">PAGINA PRINCIPAL</button>
        </p> 

    <h1 style=" width:700px; height:100px ;">
      <center style="margin-left:80px; margin-right:670px; ">DISEÑOS</center>
    </h1>

<div style="display:inline-block;vertical-align:top; margin-top:10px; width:350px; height: 500px; margin-left:100px ;" align="right">

<table align="right">

<div style="display:inline-block; vertical-align:right; text-align:left; ">
<tt>

<?php  
$conexion=mysqli_connect('localhost','root','','insight')or die('problemas de conexion');
$observar="SELECT * FROM disenador";
$ejecutar=mysqli_query($conexion,$observar);
$contador=0;
while ($filas=mysqli_fetch_array($ejecutar))
{
  $usuario      =$filas['nom_ape'];
  $email        =$filas['correo'];
  $cel          =$filas['celular'];
  $ciudad       =$filas['ciudad'];
  $estado       =$filas['estado'];
  $foto         =$filas['foto'];
  $biografia    =$filas['bio'];
  $contador++;
}
?>



<?php 
echo "<p>julieth gomez" .$usuario."</p>";

echo "<p>jt50@gmail.com" .$email."</p>";

echo "<p>3124514632" .$cel."</p>";

echo "<p>Bogota" .$ciudad."</p>";
?>



<?php 

echo "<tr><div style='display:inline-block;vertical-align:top;'class='perfil'>".$foto."</div></tr></div></tt><td><br>";
echo "<font face='cursive'>Estado actual:<br>".$estado."</font>";

if ($estado==0)
{
  echo "<p>No contratado</p>";
}
  else 
    {
      echo "<p>Contratado</p>";
    }
?>

<font face="cursive" style="">
<br>
 
  <article a style=" text-align:left;">
<?php 
echo $biografia."BIOGRAFIA DEL DISEÑADOR GRAFICO PARA VENDER ALGO Y ASI PODER SER CONTRATADO POR ALGUN SEÑOR AMABLE QUE SE LO ENCUENTRE"; ?></article>
</td>
</font>
</table>
</div>
</tr>
<td>






</div>

    </font>

<div style=" width: 1500px; height:500px;" align="top">
<div style="display:inline-block;vertical-align:bottom; ">
<img src="imagenes/img4.jpg" alt="img"/>
</div>
<div style="display:inline-block; margin-top:250px;">
<p>
Nombre proyecto
</p>
</div>

<div style="display:inline-block;vertical-align:bottom; margin-left:50px;">
<img src="imagenes/img4.jpg" alt="img"/>
</div>
<div style="display:inline-block; margin-top:250px;">
  
<p>
Nombre proyecto
</p>
</div>

<div style="display:inline-block;vertical-align:bottom; margin-left:50px; ">
<img src="imagenes/img4.jpg" alt="img"/>
</div>
<div style="display:inline-block; margin-top:250px; ">
<p>
Nombre proyecto
</p>
</div>

<div style="display:inline-block;vertical-align:bottom; clear:both;">
<img src="imagenes/img4.jpg" alt="img"/>
</div>
<div style="display:inline-block; margin-top:250px;">
<p>
Nombre proyecto
</p>
</div>

<div style="display:inline-block;vertical-align:bottom; clear:both; margin-left:50px;">
<img src="imagenes/img4.jpg" alt="img"/>
</div>
<div style="display:inline-block; margin-top:250px;">
<p>
Nombre proyecto
</p>
</div>

<div style="display:inline-block;vertical-align:bottom; clear:both; margin-left:50px;">
<img src="imagenes/img4.jpg" alt="img"/>
</div>
<div style="display:inline-block; margin-top:250px;">
<p>
Nombre proyecto
</p>
</div>

<div style="display:inline-block;vertical-align:bottom; clear:both; ">
<img src="imagenes/img4.jpg" alt="img"/>
</div>
<div style="display:inline-block; margin-top:250px;">
<p>
Nombre proyecto
</p>
</div>
</div>
<!--
<div style="display:inline-block;vertical-align:bottom;" align="left">
<img src="img4.jpg" alt="img"/>
</div>
<div style="display:inline-block; margin-top:250px;">
  <a href="">@Diseñador</a>
<p>
Nombre proyecto
</p>
</div>-->


  </body>
</html>