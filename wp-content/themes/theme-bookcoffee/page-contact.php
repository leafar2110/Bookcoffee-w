<?php get_header();?>

			<div class="portada">
				<div class="text-center  titulo-portada titulo-portada-1 wow fadeInUp">
					<h1><strong>Say hello!</strong> </h1>
			  </div>
			</div>
</section>

<section class="contact container">
		
		<div class=" form-contact row container">
			
		<div class="formulario col-lg-4 col-md-4 col-sm-6 wow animate-box fadeInUp animated-fast" data-animate-effect="fadeIn" data-wow-duration="1s">
<?php echo do_shortcode('[contact-form-7 id="40" title="Contact form 1"]'); ?>
		</div>

		<div class="info contact col-lg-4 col-md-4 col-sm-6 wow animate-box fadeInUp animated-fast" data-animate-effect="fadeIn" data-wow-duration="1.4s">
			<h2>Contact Information</h2>
			<p>55 main St.toronto</p>
			<p>1234 City Road, City name </p>
			<p><a href="tel: +584126521149"><i class="icon-phone" ></i> <span> 0412-6521149 </span></a></p>
      		<p><a href="mailto:invie@gmail.com"><i class="icon-mail2"> </i><span> invie@gmail.com</span></a></p>
       		<p><a href="#"><i class="icon-chat"> </i><span> Live Chat</span></a></p>
			
		</div>
		</div>
		

		
	</section>
	<?php get_footer();?>