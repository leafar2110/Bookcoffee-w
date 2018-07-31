<section class="platillos">
	<div class="container">
		<div class="titulo-menu">
			<h1>Popular Dishes</h1>
			<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.</p>
		</div>
		<div class="container">
			<div class="row">
				<?php $args = [
					'post_type' => 'menus',
					'meta_key' => 'fav',
					'meta_value' => true,
					
				] ?>
				<?php $the_query = new WP_Query( $args );?>
				<?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
				<div class="col-md-4 col-sm-6">
				  <a href=" <?php echo bloginfo('url').'/index.php/description'; ?>">
					<div class="contenedor" >
						<div class="article-app item e1">
							<img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid img-app" >
							<div class="separador text-center">
									<h4><?php the_title(); ?></h4>
								<?php the_excerpt();        ?>
								<h3>$<?php echo the_field('precio'); ?> </h3>
							</div>
						</div>
					</div>
				  </a>
				</div>
				
				
				<?php endwhile; endif ;?>



			

				

			</div>
		</div>
	</div>
</section>