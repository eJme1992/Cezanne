<?php include("procesar.php"); ?>


	<section class="contacto" id="contacto">
		<div class="contenedor-1150">

			<div class="texto-precontacto"><h5>¿Querés hacernos una consulta, conocer las fechas disponibles y/o pautar una entrevista?<br/>
			Completá el formulario o contactanos por los siguientes medios.</h5></div>

			
			<div class="titulo-contacto"><h1>Contactanos</h1></div>
			<div class="contenedor-form">
				<form action="<?= $_SERVER['PHP_SELF'] . '#contacto'; ?>" class="formulario" method="post">
				<fieldset>
					<input type="text" id="nombre" name="nombre" placeholder="NOMBRE" value="<?= $nombre ?>">
					<span class="error"><?= $nombre_error ?></span>
				</fieldset>
				<fieldset>
					<input type="text" id="evento" name="evento" placeholder="TIPO DE EVENTO" value="<?= $evento ?>">
					<span class="error"><?= $evento_error ?></span>
				</fieldset>
				<fieldset>
					<input type="email" id="email" name="email" placeholder="E-MAIL" value="<?= $email ?>">
					<span class="error"><?= $email_error ?></span>
				</fieldset>
				<fieldset>
					<input type="text" id="telefono" name="telefono" placeholder="TELÉFONO" value="<?= $telefono ?>">
					<span class="error"><?= $telefono_error ?></span>
				</fieldset>
				<fieldset class="full">
					<textarea type="text" id="mensaje" name="mensaje" cols="60" rows="4" placeholder="MENSAJE"><?= $mensaje ?></textarea>
				</fieldset>
				<input class="btn-enviar" type="submit" id="boton-enviar" value="ENVIAR">
				<div class="success"><?= $success; ?></div>
				</form>
			</div>
		</div>

		<div class="info-contacto">
			<div class="dato-contacto">
				<div class="icono-contacto"><img src="assets/img/icono-ubicacion.svg"></div>
				<div class="desc-contacto">Pringles 471, Temperley</div>
			</div>
			<div class="dato-contacto">
				<div class="icono-contacto"><img src="assets/img/icono-tel.svg"></div>
				<div class="desc-contacto"><a href="tel:+541148809468">(011) 4880-9468</a></div>
			</div>
			<div class="dato-contacto">
				<div class="icono-contacto"><img src="assets/img/icono-cel.svg"></div>
				<div class="desc-contacto"><a href="tel:+5491160144753">11 6014-4753</a></div>
			</div>
			<div class="dato-contacto">
				<div class="icono-contacto"><img src="assets/img/icono-mail.svg"></div>
				<div class="desc-contacto"><a href="mailto:info@cezanne.com.ar">info@cezanne.com.ar</a></div>
			</div>
		</div>
	</section>

<section class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.3171152391105!2d-58.407716484765864!3d-34.77279128041602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd2efe597b789%3A0x24b2d9f8e8afc726!2sCnel.+Pringles+471%2C+Temperley%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1524700489897" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>