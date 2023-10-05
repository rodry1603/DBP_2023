<?php
$nombre  = $_POST["fname"];
$apellido = $_POST['lname'];
$ocupacion = $_POST['ocupacion'];
$Fnacimiento =$_POST['nacimiento'];
$contacto = $_POST['contacto1'];
$correo = $_POST['contacto2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style the body */
body {
  font-family: 'Times New Roman', Times, serif;
  margin: 0;
}

/* Header/Logo Title */
.header {
	display: table;
    width: 100%;
    background:  #2353f1cc;
    
}

	.containerh {
        float: center;
        width: 70%;
        padding: 5px;
  		text-align: center;
  		color: white;
        font-size: 25px;
    }
    .asideh {
        float: left;
        width: 25%;
        padding: 15px;
    }

.page{
        display: table;
        width: 100%;
        
    }
    .container {
        float: right;
        width: 60%;
        padding: 20px;
  		text-align: left;
        font-size: 15px
    }
    .aside{
        float: right;
        width: 25%;
        padding: 50px;
  		text-align: left;
        background: #6a78c7 ;
        font-size: 12px
    }

</style>
</head>
<body>
<div class="header">
<div class="asideh">
<img src="https://www.cristinarobles.es/wp-content/uploads/2022/01/Diego-Andres-por-Cristina-Robles-Retratos-sesion-de-fotos-hombre-01.png" height="180px" width="180px" style="float:left;"/>
</div>
<div class="containerh">
<h1><?php echo $nombre;?></h1> <h1><?php echo $apellido;?></h1>
<p><?php echo $ocupacion;?></p>
</div>
</div>
<div class="page">
<div class="aside">
<h2>CONTACTO<hr></h2>
<p><FONT SIZE=3>🕻</FONT> <?php echo $contacto;?> <br> <FONT SIZE=3>✉</FONT> <?php echo $correo;?> <br> <FONT SIZE=3>⏵</FONT> <?php echo $Fnacimiento;?> <br> <FONT SIZE=2>🅻</FONT> {{ nati }} </p>

<h2>IDIOMAS<hr></h2>
<p>Español: Nativo <br> Inglés: {{ nivel }} <br> Francés: Intermedio</p>

<h2>APTITUDES<hr></h2>
<ul> <li> {{ apt }} <li> Espíritu crítico <li> Capacidad de adaptación <li> Capacidad analítica <li> Habilidades físicas</ul>

<h2>HABILIDADES<hr></h2>
<ul> <li> Acondicionamiento físico <li> Creación videos deportivos<li> Pack office <li> Programación en {{ lenguajes }} </ul>

<h2>OTROS INTERESES<hr></h2>
<ul><li> Creador de yincanas <li> Paseos ecológicos grupales <li> Lectura grupal en inglés </ul>
</div>
  
<div class="container">
<h2>PERFIL</h2>
<hr>
<p>Trabajador Social con 4 años de experiencia en proyectos
colectivos. Mi objetivo es lograr que los jóvenes obtengan acceso
a la educación superior mediante logros deportivos.</p>

<h2>EXPERIENCIA LABORAL<hr></h2>

<h2>Trabajador Social</h2>
<h3><i>México DF </i><FONT COLOR=#949393 >| 2022 — Actualmente </FONT></h3>
<ul><li>Coordinador y mediador entre los equipos de ayuda psicológica a
jovenes y niños en exclusión social<li>Velar por la salud mental del equipo y de miembros involucrados en proyectos.<li>Mepeo de necesidades estratégicas y lógicas para las diferentes áreas. <li> Monitor de ejercicios fisicos para adolescentes.<li>Programar diferentes actividades extracurriculares en los involucrados.</ul>

<h2>Trabajador Social</h2>
<h3><i>México DF </i><FONT COLOR=#949393 >| 2020-2022</FONT></h3>
<ul><li>Funciones para seguimientos de casos para jóvenes con problemas de
adicciones<li>Capacitaciones.<li>Recopilación de evidencias para auditorías y programas sociales.<li>Integración vinculadas a medidas preventivas.</ul>

<h2>Trabajador Social (Prácticas)</h2>
<h3><i>Zaragoza, España </i> <FONT COLOR=#949393 >| 2019 - 2020</FONT></h3>
<ul><li>Profesor de lengua española e inglesa para jovenes migrantes.<li>Monitor de actividades ecológicas con adolescentes.<li>Coordinador de áreas deportivas.</ul>

<h2>FORMACIÓN<hr></h2>
<h3>Grado de Trabajo Social</h3>
<h4><i>ESMA, Madrid </i><FONT COLOR=#949393 >| 2012 - 2015</FONT></h4>
<h3>Licenciatura Profesional</h3>
<h4><i>Universidad de la Frontera,</i> México DF <FONT COLOR=#949393 >| 2011 - 2012</FONT></h4>
  </div>
</div>
</body>
</html>