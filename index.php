<?php
//require_once("clases/ClsConexion.php");
//$BD = new ClsConexion();
/*$Msj = $BD -> Conectar();*/

//$Msj = $BD -> cadena_conexion();
	error_reporting(E_ALL ^ E_NOTICE);
	$op=$_GET["op"];
	switch ($op){
		case "LowerSchool";
		$contenido="php/LowerSchool.php";
        break;
        case "UpperSchool";
        $contenido="php/UpperSchool.php";
		break;
		default:
			$contenido="php/home.php";
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>
			American School Foundation Of Chiapas A.C
		</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/estilos.css"/>
		<link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/light.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/dark.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/bar.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="js/jquery.nivo.slider.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
			$('#slider').nivoSlider();
			});
		</script>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	</head>
	<body>
		<header class="Header">
			<section class="Margen">
				<div class="LogoAsfc">
					<a href="index.php"><img class="Logo" src="img/LogoAsfc.png" /></a>
				</div>
				<div class="LogoEducamos">
					<a href="http://americanschoolofchiapas.educamos.com" target="_blank"><img class="LogoEducamos"  src="img/LogoEducamos.png"/></a>
				</div>
				<div class="LogoRedes">
					<a href="https://www.facebook.com/ASFCH" target="_blank"><img class="RedesSociales" src="img/LogoFacebook.png"/></a>
					<a href="https://twitter.com/americanchiapas" target="_blank"><img class="RedesSociales" src="img/LogoTwitter.png"/></a>
					<img class="RedesSociales" src="img/LogoYoutube.png"/>
				</div>
				<div class="Contactanos">
					<span id="Contactanos"><b>Contactanos</b></span>
				</div>
			</section>
		</header>
		<section class="Contenido">
		<section class="Slider">
			<div id="wrapper">
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<img src="img/01Img.jpg" data-thumb="images/toystory.jpg" alt="" />
					<a href="http://dev7studios.com"><img src="img/02Img.jpg" data-thumb="images/up.jpg" alt="" title="Este es un Ejemplo de Leyenda" /></a>
					<img src="img/03Img.jpg" data-thumb="img/walle.jpg" alt="" data-transition="slideInLeft" />
					<img src="img/04Img.jpg" data-thumb="img.jpg" alt="" title="#htmlcaption" />
				</div>
				<div id="htmlcaption" class="nivo-html-caption">
					<strong>Ejemplo</strong> de Leyenda <em>HTML</em> con un <a href="#">Link</a>. 
				</div>
			</div>
			</div>
			</section>
			<section class="Articulos">
				<?php include($contenido);
				?>
			</section>
			<aside class="TimeLineRedes">
				<div id="fb-root"></div>
				<div class="fb-page" data-href="https://www.facebook.com/ASFCH" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/ASFCH"><a href="https://www.facebook.com/ASFCH">American School Foundation of Chiapas A.C.</a></blockquote></div></div>
			</aside>
		</section>
		<footer class="Footer">
			<section class="Margen">
			<marquee scrolldelay=100>AMERICAN SCHOOL FOUNDATION OF CHIAPAS A.C.    BLVD. BELISARIO DOMINGUEZ #5580 INT. F COL. LOS TULIPANES,TUXTLA GUTIERREZ,CHIAPAS</marquee>
			</section>
		</footer>
	</body>
</html>