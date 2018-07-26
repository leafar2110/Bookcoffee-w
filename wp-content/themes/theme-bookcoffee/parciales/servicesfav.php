<section class="service ">
	<div class="container div-service" >
	 <div class="titulo-service wow fadeInUp">
	 		<h1>Our Services</h1>
			<h4>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.</h4>
	 </div>
		
		<div class="row">
		<?php $args = [
					'post_type' => 'servicios',
					'meta_key' => 'fav',
					'meta_value' => true,
					
				] ?>
				<?php $the_query = new WP_Query( $args );?>
				<?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
			<div class="col-md-4 col-sm-6 wow animate-box fadeIn animated-fast" data-animate-effect="fadeIn" data-wow-duration="1s">
		
					
				<div class="feature-center">
						<span class="icon">
							<i class=" fa <?php echo the_field('icono'); ?>"></i>
						</span>
						<h3><?php the_title(); ?></h3>
						<p><?php the_excerpt(); ?></p>
				</div>
			</div>
			<?php endwhile; endif ;?>
		</div>
	</div>
</section>