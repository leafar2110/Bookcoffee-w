<!--  PORTADA /-->
<?php get_header();?>
<div class="portada row">
				<div class="titulo-portada-1 wow fadeInUp col-md-6  col-sm-6">
					<h1><span> Bookcoffee</span> Restaurant </h1>
			  </div>
			  <div class="col-md-4 col-sm-6">
			  	<form class="reserva wow fadeInRightBig">
			  		<legend>Table reservation</legend>
			  		<label>Personas</label>
			  		<select type="text" class="form-control form-reserva personas" name="persona">
			  			<option value="">Persons</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
							<option value="">5+</option>
			  		</select> 
			  		<label>Date</label>
			  		<input type="date" class="form-control form-reserva" name="fecha">
			  		<label>Time</label>
			  		<input type="time" class="form-control form-reserva" name="hora">
			  		<input type="submit" class="bottom-app" value="Reserve now" name="hora">
			  	</form>
			  </div>
			</div>

				
			</div>
		</header>

	</section>
<!--  PLATOS-->
<?php get_template_part('/parciales/populardishes')?>
<!--  PLATOS-->

<!--  SERVICIOS-->
<?php get_template_part('/parciales/servicesfav')?>
<!--  SERVICIOS-->

<!--  publicidad-->
<?php get_template_part('/parciales/publicidad')?>
<!--  publicidad-->

<!--  ESTADISTICAS-->
<?php get_template_part('/parciales/estadisticas')?>
<!--  ESTADISTICAS-->

<!-- SUSCRIBETE-->
<?php get_template_part('/parciales/suscribir')?>
<!-- SUSCRIBETE-->

<?php get_footer();?>
