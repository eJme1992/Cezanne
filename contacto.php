<?php include("assets/includes/head.html"); ?>
<?php include("procesar.php"); ?>
<body>
	<!--Header-->
		<?php include("assets/includes/navegacion.html"); ?>
	<!--Portada-->
		<div class="portada port-contacto">
			<div class="contenedor-1150">
				<div class="encabezado-azul">¡Contactanos!</div>
			</div>
		</div>
	
	<!--Contenido-->
	<div class="contenedor-1150">
		<div class="contenedor-contacto">
			<div class="intro-contacto">Si tenés alguna duda o consulta, completá el formulario debajo y te responderemos a la brevedad.</div>

			<div class="contenedor-form">
				<form action="<?= $_SERVER['PHP_SELF']; ?>" class="formulario" method="post">
				<div class="success"><?= $success; ?></div>
				<fieldset>
					<input type="text" id="nombre" name="nombre" placeholder="NOMBRE" value="<?= $nombre ?>">
					<span class="error"><?= $nombre_error ?></span>
				</fieldset>
				<fieldset>
					<input type="email" id="email" name="email" placeholder="E-MAIL" value="<?= $email ?>">
					<span class="error"><?= $email_error ?></span>
				</fieldset>
				<fieldset>
					<input type="text" id="telefono" name="telefono" placeholder="TELÉFONO" value="<?= $telefono ?>">
					<span class="error"><?= $telefono_error ?></span>
				</fieldset>
				<fieldset>
					<textarea type="text" id="mensaje" name="mensaje" cols="60" rows="4" placeholder="MENSAJE"><?= $mensaje ?></textarea>
					<input class="btn-enviar" type="submit" id="boton-enviar" value="ENVIAR">
				</form>
			</div>

			<div class="contenedor-datos">
				<div class="dato-contacto">
					<div class="icono-contacto"><img src="assets/img/icono-telefono2.svg"></div>
					<div class="info-dato-contacto"><a href="tel:541142820220">(011) 4282-0220</a></div>
				</div>
				<div class="dato-contacto">
					<div class="icono-contacto"><img src="assets/img/icono-email.svg"></div>
					<div class="info-dato-contacto"><a href="mailto:info@rieleslomas.com">info@rieleslomas.com</a></div>
				</div>
				<div class="dato-contacto">
					<div class="icono-contacto"><img src="assets/img/icono-facebook.svg"></div>
					<div class="info-dato-contacto"><a href="https://www.facebook.com/RLDecoracionesOK" target="blank">RL Decoraciones</a></div>
				</div>
			</div>
		</div>
	</div>
	
	

	<!--Footer-->
		<?php include("assets/includes/footer.html"); ?>
	<!--Scripts-->
		<?php include("assets/includes/scripts-pie.html"); ?>
</body>
</html>