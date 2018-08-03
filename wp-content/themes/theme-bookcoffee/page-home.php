<!--  PORTADA /-->
<?php get_header();?>
<div class="d-none d-sm-block">
	<span>hola</span>
		  	<video autoplay="autoplay" loop="loop" id="video_background" height="51vh" class="portada_background" preload="auto" volume="0" />
      		<source src="<?php the_field('video') ;?>" type="video/mp4" />	
</div>

<div class="d-sm-none">
	<img src="<?php the_field('foto'); ?>" alt="platillos" class="img_background">
</div>

<div class="container">
<div class="portada row">
				<div class="titulo-portada-1 wow fadeInUp col-md-6 col-sm-6">
					<h1><span> Bookcoffee</span> Restaurant </h1>
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
