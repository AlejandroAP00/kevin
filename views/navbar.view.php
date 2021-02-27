<!DOCTYPE html>
<html lang="es" class="no-scroll"> <!-- no-scroll -->
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
		<title> </title>

		<meta property="og:url"                content="<?php echo $URL; ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content=" " />
		<meta property="og:description"        content=" " />
		<meta property="og:image"              content=" " />


		<?php echo $favicon; ?>
		<?php echo $boostrap_v4_css ?>


		<!-- CSS own files -->
		<?php echo $own_file_css; ?>

<link rel="stylesheet" type="text/css" href="scss/kevin.scss">
<link href = "https://fonts.googleapis.com/css2? family = Gilda + Display & display = swap" rel = "hoja de estilo">
<link href = "https://fonts.googleapis.com/css2? family = Open + Sans: wght @ 300 & display = intercambiar "rel =" hoja de estilo ">
	</head>
	<body>
<div class="container-fluid offset-10">
	<div class="abuelo"></div>
		<div class="abuelo dos">
			<div class="bolitas 1">
			
		</div>
	</div>		
</div>


<section class="navegacion">
	<div class="container-fluid">

		<div class="row">

				<div class="posicion-relativa">
					<img src="<?=RUTA?>/img/fondo.png" clas="img-fluid">
				</div>

				<div class="posicion-absoluta">
					<img src="<?=RUTA?>/img/la.png" clas="img-fluid" >
				</div>

				<div class="container11 col-2 offset-1" >
					<h1>Título de banner</h1>
				</div>
				<div class="container12 col-2 offset-1" >
					<h1>subtítulo</h1>
				</div>
				<div class="container13 col-2 offset-1" >
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
				</div>
				<div class="container14 col-2 offset-1" >
					<span>Contáctanos</span><span><img src="<?=RUTA?>/img/derecha.png" clas="img-fluid" ></span>

				</div>


		</div>





	</div>
</section>
	






	<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<?php echo $jquery_js; ?>


		<!-- Javascripts own files  -->		
		<?php echo $own_file_js; ?>


		<?php echo $bootstrap_v4_js; ?>





		<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		
	</body>
</html>