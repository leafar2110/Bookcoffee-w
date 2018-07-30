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
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <i class="fa fa-bars icom"></i>
				  </button>

				  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				     <ul class="navbar-nav ">
					      <li class="nav-item "><a class="nav-link" href="<?php echo bloginfo('url').'/index.php'; ?>">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php/menu'; ?>">Menu</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php/service'; ?>">Service</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php/contact'; ?>">Contact</a></li>
							<li class="nav-item"><a class="nav-link" href="#"><span>Reservation</span></a></li>
					    </ul>
				  </div>
				</div>
			</nav>
		</header>
		



			