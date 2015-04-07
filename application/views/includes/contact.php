<div class="container">
<div class="row"><div class="clearfix"></div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            <?php $attributes = array("class" => "form-horizontal", "name" => "form_contact");
            echo form_open("index.php/home/form_contact", $attributes);?>
            <fieldset>
            <legend>Contact Form</legend>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="name" class="control-label">Name</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="name" placeholder="Your Full Name" type="text" value="<?php echo set_value('name'); ?>" />
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="email" class="control-label">Email ID</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="email" placeholder="Your Email ID" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="subject" class="control-label">Subject</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="subject" placeholder="Your Subject" type="text" value="<?php echo set_value('subject'); ?>" />
                    <span class="text-danger"><?php echo form_error('subject'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="message" class="control-label">Message</label>
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="4" placeholder="Your Message"><?php echo set_value('message'); ?></textarea>
                    <span class="text-danger"><?php echo form_error('message'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <input name="submit" type="submit" class="btn btn-primary" value="Send" />
                </div>
            </div>
            </fieldset>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>

<!--
<div class="container">
	<div class="row"><div class="clearfix"></div>
		<div class="col-lg-12">
		    <h1 class="page-gallery">Contacto</h1>
		</div>

		<div class="col-xs-12 col-md-8">
			<form method="post" action="<?php echo base_url('index.php/home/form_contact'); ?>">
				<div class="form-group has-success has-feedback">
					<label for="InputName">Nombre y apellido</label>
				    <input type="text" name="name" class="form-control-contact" id="InputName">
				    <span class="text-danger"><?php echo form_error('name'); ?></span>
				</div>

				<div class="form-group">
				    <label for="InputPhone">Teléfono fijo o móbil</label>
				    <input type="text" name="phone" class="form-control-contact" id="InputPhone">
				    <span class="text-danger"><?php echo form_error('phone'); ?></span>
				</div>

				<div class="form-group">
				    <label for="InputEmail">Correo electrónico</label>
				    <input type="email" name="email" class="form-control-contact" id="InputEmail">
				    <span class="text-danger"><?php echo form_error('email'); ?></span>
				</div>

				<div class="form-group">
				    <label for="InputSubject">Asunto</label>
				    <input type="text" name="subject" class="form-control-contact">
				    <span class="text-danger"><?php echo form_error('subject'); ?></span>
				</div>

				<div class="form-group">
				    <label for="InputTheme">Mensaje</label>
				    <textarea name="message" class="form-control-contact" rows="3" style="width: 526px; height: 138px;"></textarea>
					<span class="text-danger"><?php echo form_error('message'); ?></span>
				</div>
					
				<button type="submit" name="submit" class="btn btn-primary pull-left">Enviar</button>
			</form>

			<?php echo $this->session->flashdata('msg'); ?>
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
-->