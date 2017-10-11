<div class="section contactView" data-anchor="contact">
	<div class="content wow fadeInDown" data-wow-delay="0.2s">
		<div class="contactView__header">
			<div class="container">
				<div class="row">
					<div class="col-12">
                      <h1><?php echo __('CONTÁCTAME', $lang) ?></h1>
                      <p><?php echo __('Si usted está interesado en trabajar con migo o simplemente quiere decir hola, me encantaría saber!', $lang) ?></p>
						<br>
					</div>
				</div>
			</div>
		</div>
		<div class="contactView__form">
			<div class="contact-form">
				<div id="form-messages"></div>
				<form id="ajax-contact" method="post" action="contact.php" data-toggle="validator">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-6">
								<div class="form-group has-feedback wow fadeInLeft" data-wow-delay="0.6s">
                                  <input type="text" class="form-control" id="name" name="fName" placeholder=<?php echo __('NOMBRE', $lang) ?>
										   data-error="Field can't be blank!" required>
									<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group has-feedback wow fadeInRight" data-wow-delay="0.8s">
									<input type="email" class="form-control" id="email" name="fEmail" placeholder="EMAIL"
										   data-error="Field can't be blank!" required>
									<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group has-feedback wow fadeInLeft" data-wow-delay="1s">
									<textarea data-minlength="8" class="form-control" id="message" name="fAsunto"
											  placeholder="MESSAGE" data-error="Minimum of 10 characters" required></textarea>
									<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
									<div class="help-block with-errors"></div>
								</div>
								<div class="hidden" style="display: none;">
									<input type="text" class="form-control" id="human" name="human" placeholder="">
								</div>
								<div class="wow fadeInUp" data-wow-delay="1s">
                                  <button type="submit" id="submit" name="submit" class="btn btn-lg"><?php echo __('ENVIAR MENSAJE', $lang) ?></button>
								</div>
							</div>
						</div>
					</div>
				</form>
				<br>
			</div>
		</div>
	</div>
</div>
