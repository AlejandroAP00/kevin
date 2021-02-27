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
<link href = "https://fonts.googleapis.com/css2? family = Gilda + Display & display = "swap rel = "hoja de estilo">
<link href = "https://fonts.googleapis.com/css2? family = Open + Sans: wght @ 300 & display = intercambiar "rel =" hoja de estilo ">
<link href = "https://fonts.googleapis.com/css2? family = Poppins & display = swap" rel = "hoja de estilo ">
	</head>
	<body >

		<section class="final">
			<div class="container">	
				<picture>
					<img src="<?=RUTA?>/img/la.png" alt="">
				</picture>					
  			</div>

  			<div class="container2">
	  			<div class="row" style="column-count: 2;">
		  			<div class="col-2 offset-1">
		  				<br>
		  				<span>Inicio</span>
		  			</div>
		  			<div class="col-2 offset-1">
		  				<br>
		  				<span>T. 9999 234567</span>
		  			</div>
		  		</div>
  			</div>

  			<div class="container3">
	  			<div class="row" style="column-count: 2;">
		  			<div class="col-2 offset-1">
		  				<span>Servicios</span><br><span>Acerca de</span>
		  			</div>
		  			<div class="col-3 offset-1">
		  				<span>D. Calle x #000-E x 0 y 0, Colonia Esperanza. Mérida, Yuc. MX</span>
		  			</div>
		  		</div>
  			</div>

  			<div class="container4">
	  			<div class="row" style="column-count: 2;">
		  			<div class="col-2 offset-1">
		  				<span>Casos de éxito</span>
		  			</div>
		  			<div class="col-2 offset-1">
		  				<span>M. mail@example.com</span>
		  			</div>
		  		</div>
  			</div>

  			<div class="container5">
	  			<div class="row" style="column-count: 2;">
		  			<div class="col-2 offset-1">
		  				<span>Contacto</span>
		  			</div>
		  			<div class="col-2 offset-1">
		  				<span><img src="<?=RUTA?>/img/finalf.png" alt="" ></span>
		  				<span><img src="<?=RUTA?>/img/finali.png" alt=""></span>
		  			</div>
		  		</div>
  			</div>
  			
  			<div class="container6">
  				<div class="finales">
 					<p>Copyright © 2020 Laminex. Todos los derechos reservados. <br><br>Aviso de privacidad</p>
 				</div>
  			</div>
<br><br><br>
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