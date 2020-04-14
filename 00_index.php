<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>OrangeSquareShadow</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
-->
</style>
</head>
<body>

<div id="wrap">

<div id="header">
<h1><a href="#">Sistema Recomendacion Libros</a></h1>
<h2>Libros de la Facultad de Ciencia de la Computación</h2>
</div>

<div id="top"> </div>
<div id="menu">
<ul>
<li><a href="00_index.php">Principal</a></li>
<li><a href="00_registro.php">Registro</a></li>
<li><a href="00_ver_libros.php">Ver Libros</a></li>
<li><a href="00_buscar_titulo.php">Buscar Titulo</a></li>
<li><a href="00_buscar_autor.php">Buscar Autor</a></li>
<li><a href="00_ver_clasificacion.php">Clasificacion</a></li>


</ul>
</div>

<div id="content">
<div class="left"> 

<h2>Bienvenido</h2>
<div class="articles">
  
  
  <?PHP
  		
  		
		
			
			echo '<p class="Estilo1 Estilo1">';
			echo "Numero de Cliente:   <b>$libo</b>";
		  	echo "       Credito:<big><b>$punto</b></big>";
			echo "</p>";	
		}
		
		
		
       
		  	
			

 
 	?> 
  
  
  <p class="Estilo1">&nbsp;</p>
  <p class="Estilo1">&nbsp;</p>
  <p class="Estilo1">Es un sitio web en español donde puedes recibir y hace recomendaciones de libros de la Facultad de Ciencias de la Computación. Puedes buscar libros por titulo o por autor asi poderser registrar y votar por un libro, dar una recomendacion a otro usuario. </p>
</div>
<h2><a href="#"></a></h2>
<div class="articles"></div>
</div>

<div class="right">


<FORM ACTION="login.php" method= "Post">
<ul>
<p class="Estilo1">Usuario: </p>
<p>
  <input type="text" name="usuario" require />
</p>
</ul>

<ul><p class="Estilo1">Contraseña: </p>
  <p>
    <input type="text" name="password" require />
  </p>
  <p>&nbsp;    </p>
</ul>
<p>
  <INPUT TYPE="submit" name="enviar" VALUE="Enviar">
</p>
</FORM>
  
</div>
<div style="clear: both;"> </div>
</div>

<div id="bottom"> </div>
<div id="footer">
Designed by <a href="http://www.free-css-templates.com/">Free CSS Templates</a>, Thanks to <a href="http://www.openwebdesign.org/">web design</a>
</div>
</div>

</body>
</html>
