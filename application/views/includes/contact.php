<div class="container">
	<div class="row"><div class="clearfix"></div>
		<div class="col-lg-12">
		    <h1 class="page-gallery">Contacto</h1>
		</div>

		<div class="col-xs-12 col-md-8">
			<form method="post" action="<?php echo base_url('application/views/includes/send.php'); ?>">
				<div class="form-group has-success has-feedback">
					<label for="InputName">Nombre y apellido</label>
				    <input type="text" name="name" class="form-control-contact" id="InputName">
				</div>

				<div class="form-group">
				    <label for="InputPhone">Teléfono fijo o móbil</label>
				    <input type="text" name="phone" class="form-control-contact" id="InputPhone">
				</div>

				<div class="form-group">
				    <label for="InputEmail">Correo electrónico</label>
				    <input type="email" name="email" class="form-control-contact" id="InputEmail">
				</div>

				<div class="form-group">
				    <label for="InputSubject">Asunto</label>
				    <input type="text" name="subject" class="form-control-contact">
				</div>

				<div class="form-group">
				    <label for="InputTheme">Mensaje</label>
				    <textarea name="message" class="form-control-contact" rows="3" style="width: 526px; height: 138px;"></textarea>
				</div>

				<!--<div class="checkbox">
				    <label>
				      <input type="checkbox"> Aceptar y enviar.
				    </label>
				</div>-->
					
				<button type="submit" name="submit" class="btn btn-primary pull-left">Enviar</button>
			</form>
		</div>

		<div class="col-xs-6 col-md-4">
			<div class="row">
				<h3>Datos de contacto</h3>
				<hr>
			</div>

			<div class="row">
				<address>
				  <h4>Dirección:</h4>
				  C/ Sant Gregori, 2-2n<br>
				  Tarragona - Roquetes, 43520<br>
				</address>

				<address>
				  <h4>Correo electrónico:</h4>
				  <a href="mailto:#">info@paolodavila.com</a>
				</address>

				<address>
				  <h4>Teléfono: </h4>
				  <abbr title="Phone">+34 672 65 45 26</abbr>
				</address>
			</div>
		</div>
	</div>
	<hr>
</div>