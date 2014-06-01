<!DOCTYPE html>
<html>
	<head>
		<title>Perfil de Marcial</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<header>
			<a href="http://localhost/versionpersonalayudantiatarea2" id="titulo"><img src="img/isw.jpg" id="img"/></a>
			<nav>
				<ul class="menu">
					<li><a href="#">Integrantes</a>
						<ul>
							<li><a href="1.php">Marco Arratia Ubilla</a></li>
							<li><a href="2.php">Marcial Jara Vega</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		<section class="contenedor">
			<img class ="imagen" src="img/img2.jpg" />
			<article class="articulo">
				<p>Nombre: Marcial Sebastian Jara Vega<?php ?></p>
				<p>Edad: XX</p>
				<p>Correo: marcialito-hoy@gmail.com</p>
				<p>Teléfono: XXXXXXXXX</p>
				<p>Carrera: Ingeniería en Informática</p>
				<p>Proyecto a cargo: Administración de Laboratorio</p>
				<p>GitHub: <a href="#" class="ref">Mi Git</a></p>
			</article>
		</section>
		<footer>
			<p> 
			<?php
				$num = rand(0,5);
				$array = array(
					"La más estricta justicia no creo que sea siempre la mejor política.  - Abraham Lincoln", 
					"El mundo no está en peligro por las malas personas sino por aquellas que permiten la maldad  - Albert Einstein", 
					"Cada día sabemos más y entendemos menos.  - Albert Einstein", 
					"Si es bueno vivir, todavía es mejor soñar, y lo mejor de todo, despertar.  - Antonio Machado",
					"La vida no es sino una continua sucesión de oportunidades para sobrevivir.  - Gabriel García Marquez",
					"El pesimista se queja del viento; el optimista espera que cambie; el realista ajusta las velas.  - William George Ward",
				);
				echo "<h3>$array[$num]</h3>";
			?>
			</p>
		</footer>
	</body>
</html>