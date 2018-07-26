<?php get_header();?>

			<div class="portada">
				<div class="titulo-portada titulo-portada-1 wow fadeInUp">
					<h1><strong>Taste all our menu</strong></h1>	
			  </div>
			</div>
	</section>
<!--  PORTADA /-->

<!--  PLATOS-->
<?php get_template_part('/parciales/dishes')?>
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