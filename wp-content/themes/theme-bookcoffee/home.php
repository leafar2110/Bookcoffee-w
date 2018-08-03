<!--  PORTADA /-->
<?php get_header();?>
<div class="d-none d-sm-block">
	<span>hola</span>
		  	<video autoplay="autoplay" loop="loop" id="video_background" height="51vh" class="portada_background" preload="auto" volume="0"/>
      		<source src="<?php echo get_template_directory_uri();?>/assets/video/background.mp4" srcset="<?php echo get_template_directory_uri();?>/assets/img/espreso.jpg" type="video/mp4" />	
</div>

<div class="d-sm-none">
	<img src="<?php echo get_template_directory_uri();?>/assets/img/comida.jpg" alt="platillos" class="img_background img-fluid">
</div>

<div class="container">
<div class="portada row">
				<div class="titulo-portada-1 wow fadeInUp col-md-6 col-sm-6">
					<h1><span> Bookcoffee</span> Restaurant </h1>
			  </div>
			  <div class="col-sm-6 col-md-4">
			  	<form class="reserva reserva-home wow fadeInRightBig">
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
			  		<input type="submit" class="bottom-app btn-reserva" value="Reserve now" name="hora">
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
