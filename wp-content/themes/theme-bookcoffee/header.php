<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
>	<title>Bookcoffee-tu cafe</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <?php wp_head();?>

</head>
<body>

<!--  PORTADA -->
	<section class="background-app">
		<header class="header">
	
			<nav class="navbar navbar-expand-lg navbar-light nav-app">
				<div class="container">
				  <a class="navbar-brand" href="<?php echo bloginfo('url').'/index.php'; ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/2.png" class="nav-logo img-fluid"></a>
					<button type="button" class="navbar-toggler icom-tablet" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" aria-expanded="false">
						<i class="fa fa-cutlery icom" ></i></button>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars icom"></i>
					  </button>
				  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				     <ul class="navbar-nav ">
					      <li class="nav-item "><a class="nav-link" href="<?php echo bloginfo('url').'/index.php'; ?>">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php/menu'; ?>">Menu</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php/service'; ?>">Service</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php/contact'; ?>">Contact</a></li>
							<li class="nav-item"><a class="nav-link" href="#"><span><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Reservation</button></span></a></li>
					    </ul>
				  </div>
				</div>
			</nav>
		</header>
<div class="modal fade  justify-content-end container" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content reserva reserva-modal">
      <div class="modal-header">
        <legend>Table reservation</legend>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
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
			  		
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class=" bottom-app">Send message</button>
      </div>
    </div>
  </div>
</div>
		



			