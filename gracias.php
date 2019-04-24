<?php include("assets/includes/head.html"); ?>
<body>
	<!--Navegación-->
	<?php include("assets/includes/navegacion.html"); ?>
	<!--Slider-->
	<div class="my-slider">
		<ul>
			<li>
				<img src="assets/img/slide1.jpg">
				<div class="contenido-slide">
					<div class="texto-slide">
						<div class="texto-dorado">Eventos</div>
						<div class="texto-blanco">Sociales</div>
					</div>
				</div>
				<div class="cta-slide"><a href="sociales.php">Más info</a></div>
			</li>
			<li>
				<img src="assets/img/slide2.jpg">
				<div class="contenido-slide">
					<div class="texto-slide">
						<div class="texto-dorado">Eventos</div>
						<div class="texto-blanco">Corporativos</div>
					</div>
				</div>
				<div class="cta-slide"><a href="corporativos.php">Más info</a></div>
			</li>
			<li>
				<img src="assets/img/slide3.jpg">
				<div class="contenido-slide">
					<div class="texto-slide">
						<div class="texto-dorado">Servicio de</div>
						<div class="texto-blanco">Catering</div>
					</div>
				</div>
				<div class="cta-slide"><a href="catering.php">Más info</a></div>
			</li>
		</ul>
	</div>

	<!--Contenido-->
	<div class="contenedor-1150">
		<section class="bienvenidos">
			<div class="titulo-bienvenidos"><h1>Bienvenidos</h1></div>
			<div class="contenido-bienvenidos"><h5>
			Nuestra principal misión es acompañarlos en el complejo camino de organizar un evento, ofreciendo alternativas según sus gustos, deseos y tipo de evento. Creemos que la dedicación y el detalle hacen la excelencia. Hacemos propios los sueños de cada uno de nuestros clientes. Y por sobre todas las cosas... amamos lo que hacemos.</h5></div>
			<div class="cta-bienvenidos"><a href="salon.php">Conocé nuestros servicios</a></div>
		</section>

		<section class="accesos-servicios">
			<div class="col">
				<div class="acceso">
					<a href="catering.php">
						<div class="bg-acceso"><img src="assets/img/bg-acceso-catering.jpg"></div>
						<div class="bg-hover-acceso"><img src="assets/img/bg-hover-acceso-catering.png"></div>
						<div class="texto-acceso">catering</div>
					</a>
				</div>
			</div>
			<div class="col">
				<div class="acceso">
					<a href="sociales.php">
						<div class="bg-acceso"><img src="assets/img/bg-acceso-sociales.jpg"></div>
						<div class="bg-hover-acceso"><img src="assets/img/bg-hover-acceso-sociales.png"></div>
						<div class="texto-acceso"><span>eventos</span>sociales</div>
					</a>
				</div>
				<div class="acceso">
					<a href="corporativos.php">
						<div class="bg-acceso"><img src="assets/img/bg-acceso-corporativos.jpg"></div>
						<div class="bg-hover-acceso"><img src="assets/img/bg-hover-acceso-corporativos.png"></div>
						<div class="texto-acceso"><span>eventos</span>corporativos</div>
					</a>
				</div>
			</div>
			<div class="col">
				<div class="acceso">
					<a href="salon.php">
						<div class="bg-acceso"><img src="assets/img/bg-acceso-servicios.jpg"></div>
						<div class="bg-hover-acceso"><img src="assets/img/bg-hover-acceso-servicios.png"></div>
						<div class="texto-acceso">servicios</div>
					</a>
				</div>
			</div>
		</section>
	</div>

	<section class="eventos">
		<div class="bg-eventos"></div>
		<div class="contenido-eventos">
			<div class="titulo-eventos"><h1>Eventos</h1></div>
			<div class="texto-eventos"><h5>Comenzando con una entrevista personalizada, te asesoraremos para que tu fiesta sea un éxito inolvidable para vos y tus invitados. Evaluaremos las propuestas que mejor se adapten a tus necesidades y expectativas y te acompañaremos cuidando cada detalle, brindándote el mejor servicio.</h5></div>

			<div class="lista-eventos">
				<div class="evento">
					<div class="icono-evento"><img src="assets/img/icono-corporativos.svg"></div>
					<div class="nombre-evento">Eventos Corporativos</div>
				</div>
				<div class="evento">
					<div class="icono-evento"><img src="assets/img/icono-casamientos.svg"></div>
					<div class="nombre-evento">Casamientos</div>
				</div>
				<div class="evento">
					<div class="icono-evento"><img src="assets/img/icono-cumple.svg"></div>
					<div class="nombre-evento">Cumpleaños</div>
				</div>
				<div class="evento">
					<div class="icono-evento"><img src="assets/img/icono-findeanio.svg"></div>
					<div class="nombre-evento">Fiestas de Fin de Año</div>
				</div>
				<div class="evento">
					<div class="icono-evento"><img src="assets/img/icono-capacitaciones.svg"></div>
					<div class="nombre-evento">Capacitaciones</div>
				</div>
			</div>				
		</div>			
	</section>

	<div class="contenedor-1150">
		<section class="intermedio">
			<div class="intermedio-pt1">
				<div class="intermedio-pt1-texto"><h5>En Cezanne Eventos tenemos el desafío de transformar la organización de tu evento en una experiencia única, agradable y placentera. Para ello, contamos con un equipo de profesionales y especialistas que te acompañaran en cada decisión.</h5></div>
				<div class="intermedio-pt1-foto"><img src="assets/img/intermedio-foto1.jpg"></div>
			</div>
			<div class="intermedio-foto2"><img src="assets/img/intermedio-foto2.jpg"></div>
		</section>
	</div>

	<section id="gracias" style="padding-top:20px; padding-bottom: 20px;">
		<center>
			<h2>Muchas gracias por su interés,<br> estaremos resolviendo su duda en la brevedad</h2>
		</center>
	</section>
	<!--Footer-->
		<?php include("assets/includes/footer.html"); ?>
	<!--Scripts-->
		<?php include("assets/includes/scripts-pie.html"); ?>
</body>
</html>