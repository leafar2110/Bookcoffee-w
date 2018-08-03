

<?php get_header();?>
<div class="d-none d-sm-block">
	<span>hola</span>
		  	<video autoplay="autoplay" loop="loop" id="video_background" height="51vh" class="portada_background" preload="auto" volume="0"/>
      		<source src="<?php echo get_template_directory_uri();?><?php the_field('video'); ?>" type="video/mp4" />	
</div>

<div class="d-sm-none">
	<img src="<?php echo get_template_directory_uri();?>/assets/img/comida.jpg" alt="platillos" class="img_background img-fluid">
</div>

    <div class="portada-1">
        <div class="text-center  titulo-portada titulo-portada-1 wow fadeInUp">
            <h1><strong>Description!</strong> </h1>
        </div>
    </div>
    </section>
    
    <section class="description container">
        <div class="titulo-menu">
                <h1>Popular Dishes</h1>
        </div>  
        <div class="row">
            <div class="col-12 col-md-8 ">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/espresso.jpg" alt="" class="img-fluid">
                <h3>populardishes</h3>
                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis inventore 
                enim dicta molestias perferendis natus consequuntur nam accusantium suscipit itaque, beatae, maiores 
                ipsa, nobis ad dolores debitis voluptate nihil ratione quam adipisci dolorum quibusdam. Quis dolore
                 voluptatibus vel id optio obcaecati. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam rerum 
                 ipsam, repudiandae ad ullam aliquid eos quaerat ducimus enim iure optio possimus quos maiores, delectus 
                 accusamus velit atque ab dicta!</p>
                </div>
                
            <div class="col-12 col-sm-4"> 
            <p class="text-justify"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis inventore 
                enim dicta molestias perferendis natus consequuntur nam accusantium suscipit itaque, beatae, maiores 
                ipsa, nobis ad dolores debitis voluptate nihil ratione quam adipisci dolorum quibusdam. Quis dolore
                 voluptatibus vel id optio obcaecati.</p>
                 <p class="text-justify"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis inventore 
                enim dicta molestias perferendis natus consequuntur nam accusantium suscipit itaque, beatae, maiores 
                ipsa, nobis ad dolores debitis voluptate nihil ratione quam adipisci dolorum quibusdam. Quis dolore
                 voluptatibus vel id optio obcaecati.</p>
                 <p class="text-justify"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis inventore 
                enim dicta molestias perferendis natus consequuntur nam accusantium suscipit itaque, beatae, maiores 
                ipsa, nobis ad dolores debitis voluptate nihil ratione quam adipisci dolorum quibusdam. Quis dolore
                 voluptatibus vel id optio obcaecati.</p>

            </div>

            
        
        
        </div>


    </section>



<?php get_footer();?>

