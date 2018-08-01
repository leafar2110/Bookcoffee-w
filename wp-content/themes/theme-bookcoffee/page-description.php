

<?php get_header();?>
<div class="d-none d-sm-block">
	<span>hola</span>
		  	<video autoplay="autoplay" loop="loop" id="video_background" height="51vh" class="portada_background" preload="auto" volume="0"/>
      		<source src="<?php echo get_template_directory_uri();?>/assets/video/background.mp4" srcset="<?php echo get_template_directory_uri();?>/assets/img/espreso.jpg" type="video/mp4" />	
</div>

<div class="d-sm-none">
	<img src="<?php echo get_template_directory_uri();?>/assets/img/comida.jpg" alt="platillos" class="img_background">
</div>

    <div class="portada-1">
        <div class="text-center  titulo-portada titulo-portada-1 wow fadeInUp">
            <h1><strong>Description!</strong> </h1>
        </div>
    </div>
    </section>
    
    <section class="platillos">
        <div class="titulo-menu">
                <h1>Popular Dishes</h1>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.</p>
        </div>    
    </section>



<?php get_footer();?>

