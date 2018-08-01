

<?php get_header();?>
<div class="d-none d-sm-block">
	
		  	<video autoplay="autoplay" loop="loop" id="video_background" height="51vh" class="portada_background" preload="auto" volume="0"/>
      		<source src="<?php echo get_template_directory_uri();?><?php the_field('video'); ?>" type="video/mp4" />	
</div>

<div class="d-sm-none">
	<img src="<?php echo get_template_directory_uri();?>/assets/img/comida.jpg" alt="platillos" class="img_background">
</div>

    <div class="portada-1">
        <div class="text-center  titulo-portada titulo-portada-1 wow fadeInUp">
            <h1><strong><?php the_title(); ?></strong> </h1>
        </div>
    </div>
    </section>
    
    <section class="platillos">
        <div class="titulo-menu">
                <h1>Popular Dishes</h1>
                <p><?php the_excerpt();        ?></p>
        </div>    
    </section>



<?php get_footer();?>

