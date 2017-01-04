<?php
	session_start();
	include("library/class_email_sender.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="theme-color" content="#00897B" />
	<title>Salmo Austral Próximamente</title>
	<!-- <link name="author" content="Argenis Oldair Palacios Escobar" /> -->
	<meta name="description" content="Salmo Austral">
	<!-- Favicons -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<!-- Mobile -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
	<meta http-equiv="cleartype" content="on" />
	<!-- Mobile Internet Explorer ClearType Technology -->
	<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->
	<meta name="robots" content="index,follow" />
	<meta name="mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="application-name" content="Salmo Austral" />
	<meta name="apple-mobile-web-app-title" content="Salmo Austral" />
	<meta name="msapplication-TileColor" content="#00897B" />
	<meta name="HandheldFriendly" content="true" />
	<meta name="MobileOptimized" content="320" />
	<!-- CSS start here -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<!-- CSS end here -->
	<!-- Google fonts start here -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
	<!-- Google fonts end here -->
	<script>
		// iOS viewport scaling bug fix, by @mathias, @cheeaun and @jdalton
		(function(doc){var addEvent='addEventListener',type='gesturestart',qsa='querySelectorAll',scales=[1,1],meta=qsa in doc?doc[qsa]('meta[name=viewport]'):[];function fix(){meta.content='width=device-width,minimum-scale='+scales[0]+',maximum-scale='+scales[1];doc.removeEventListener(type,fix,true);}if((meta=meta[meta.length-1])&&addEvent in doc){fix();scales=[.25,1.6];doc[addEvent](type,fix,true);}}(document));
	</script>
</head>
<body class="ux">
		<div class="bg-overlay"></div>
		<!-- Preloader start here -->
		<div id="preloader">
			<div id="status"></div>
		</div>
		<!-- Preloader end here -->
		<!-- About Icon start here -->
		<div class="about-us"> 
			<a href="#" class="fa fa-file-text-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg" data-placement="right" title="Nosotros"></a>
		</div>
		<!-- About Icon end here -->
		<!-- Contact Icon start here -->
		<div class="contact-us"> 
			<a href="#" class="fa fa-envelope-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg2"  data-placement="left" title="Contacto"></a>
		</div>
		<!-- Contact Icon end here -->
		<!-- Main container start here -->
		<section class="container main-wrapper">
			<!-- Logo start here -->
			<section id="logo" class="fade-down">
				<a href="#" title="Kuzu - Próximamente">
					<img src="img/logo.png" style="width:50%;" alt="Kuzu Proximamente">
				</a>
			</section>
			<!-- Logo end here -->
			<!-- Slogan start here -->
			<section class="hidden slogan fade-down">
				<h1>Salmo Austral próximamente</h1>
			</section>
			<!-- Slogan end here -->
			<!-- Count Down start here -->
			<section class="count-down-wrapper fade-down">
				<ul class="row count-down">                 
					<li class="col-md-3 col-sm-6">   
						<input class="knob days" data-readonly=true data-min="0" data-max="365" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#e84440" data-bgColor="#FA716E" data-angleOffset="180">
						<span id="days-title">Días</span>
					</li>    
					<li class="col-md-3 col-sm-6"> 
						<input class="knob hour" data-readonly=true data-min="0" data-max="24" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#e84440" data-bgColor="#FA716E" data-angleOffset="180">
						<span id="hours-title">Horas</span>
					</li>    
					<li class="col-md-3 col-sm-6"> 
						<input class="knob minute" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#e84440" data-bgColor="#FA716E" data-angleOffset="180">
						<span id="mins-title">Minutos</span>
					</li>    
					<li class="col-md-3 col-sm-6"> 
						<input class="knob second" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#e84440" data-bgColor="#FA716E" data-angleOffset="180">
						<span id="secs-title">Segundos</span>
					</li>                
				</ul>              
			</section>
			<!-- Count Down end here -->
			<!-- Newsletter start here -->
			<section class="hidden newsletter row fade-down">      
				<form action="//afrussel.us10.list-manage.com/subscribe/post?u=9d80e0546273f34e306d026fe&amp;id=748920b40a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="contact col-md-6 fade-down validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll" class="form-group">
					<div><span class="email-ico"> <i class="fa fa-envelope-o"></i> </span>
					<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Coloca tu Email y estaremos conectados">        	</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;"><input type="text" name="b_9d80e0546273f34e306d026fe_748920b40a" tabindex="-1" value=""></div>
					<div class="clear"><input type="submit" value="Submit" name="Submit" id="mc-embedded-subscribe" class="btn-submit"></div>
				</div>
				</form>
			</section>
			<!-- Newsletter end here -->
			<!-- Social icons start here -->
			<ul class="connect-us row fade-down">
				<li><a href="#" target="_blank" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" target="_blank" class="instagram tool-tip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#" target="_blank" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			</ul>
			<!-- Social icons end here -->
			<!-- Footer start here -->
			<footer class="fade-down">        
				<p class="footer-text">&copy; Salmo Austral 2017</p>
			</footer>
			<!-- Footer end here -->
		</section>
		<!-- About start here -->
		<div class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
			<a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
			<div class="modal-dialog modal-lg clearfix">
			<div class="modal-content pop-up">
				<h3>Salmo Austral</h3>
				<div class="clearfix">
					<div>
						<h4 style="text-align: center;">
							Salmo Austral es una exportadora y ahumadora de salmón, una empresa joven, con nuevas ideas, comprometida con el producto, con los clientes y con el consumidor final. Convencida de que la innovación y la tecnología es un factor clave para asegurar el éxito a largo plazo dentro de la categoría de salmones.
							<br>
							Somos una empresa que suministra alimentos de calidad, saludables y nutritivos orientados a los mercados más exigentes del mundo. Porque Salmo Austral es un Arte Gourmet.
						</h4>
					</div>
				</div>
				<ul class="hidden features"> 
					<li>Animated Countdown Timer</li>
					<li>Twitter bootstrap Based</li>
					<li>Fully Responsive Design</li>
					<li>Ajax Email Signup form with validation</li>
					<li>Well structured and commented code</li>
					<li>Easily customizable</li>
					<li>Well Guided Documentation</li>
					<li>Google web fonts</li>
					<li>FontAwesome icons</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- About end here -->
	<!-- Contact start here -->
	<div class="modal fade bs-example-modal-lg2" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
		<a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
		<div class="modal-dialog modal-lg">
	  		<div class="modal-content pop-up pop-up-cnt">
				<h3>Contactanos</h3>
				<!--Email Sending Script -->
				<?php
				$name="";
				$from="";
				$message="";
				if(isset($_POST['submit'])){
					$name=mysql_real_escape_string($_POST['name']);
					$from=mysql_real_escape_string($_POST['email']);
					$message=mysql_real_escape_string($_POST['comments']);
					$code=$_SESSION['captcha'];
					$captcha=mysql_real_escape_string($_POST['captcha']);
					$to="ventas1@salmoaustral.com"; // Add your e-mail here
					if($code!=$captcha){
						echo '<script>alert("Captcha Invalido");</script>';
					}else{
						include("library/send_email.php");
					}
					//Isset finishes here
				}
				?>
				<!-- Email Sending Script-->
				<div class="clearfix cnt-wrap">
					<form id="contactform" name="contactform" action="" method="post">
						<div id="result"></div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
							<input type="text" id="name" placeholder="Nombre" name="name" value="<?php echo $name;?>" required>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
							<input type="text"  id="email" placeholder="Email" name="email" value="<?php echo $from;?>" required>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns">
							<textarea id="comments" name="comments" placeholder="Mensaje" required><?php echo $message;?></textarea>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns captcha text-center">
							<img src="captcha.php"><br>
							<input type="text" name="captcha" placeholder="captcha"required>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center columns">
							<button name="submit" id="submit" class="contact-btn-submit" type="submit">Enviar</button>
						</div>
					</form>
				</div>
				<div class="clearfix cnt-wrap">
					<div class="col-md-4 col-sm-4">
						<i class="fa fa-phone"></i>
						<h4>Teléfono</h4>
						<p>Oficina: <a href="tel: (+52) 01 55 7158 3577">(+52) 01 55 7158 3577</a></p>
					</div>
					<div class="col-md-4 col-sm-4">
						<i class="fa fa-envelope-o"></i>
						<h4>Email</h4>
						<p><a href="mailto:ventas1@salmoaustral.com" target="_blank">ventas1@salmoaustral.com</a></p>
						<p><a href="mailto:ventas2@salmoaustral.com" target="_blank">ventas2@salmoaustral.com</a></p>
						<p><a href="mailto:ventas3@salmoaustral.com" target="_blank">ventas3@salmoaustral.com</a></p>
					</div>
					<div class="col-md-4 col-sm-4">
						<i class="fa fa-map-marker"></i>
						<h4>Dirección</h4>
						<p>
							<a href="https://goo.gl/maps/jXsiz6LaQAL2" target="_blank">
							Hortensia<br />
							Manzana 61, Lote 1<br />
							Col. Los Ángeles,<br />
							Delegación Iztapalapa.<br />
							C.P. 09830 Ciudad de México<br />
							</a>
							Tel.: <a href="tel: (+52) 01 55 7158 3577">(+52) 01 55 7158 3577</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact end here --> 
	<!-- Main container start here -->
	<!-- Javascript framework and plugins start here -->
	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script> 
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/modernizr.js"></script> 
	<script type="text/javascript" src="js/appear.js"></script>
	<script src="js/jquery.knob.js"></script>
	<script src="js/jquery.ccountdown.js"></script>
	<script src="js/init.js"></script>
	<script src="js/general.js"></script>
	<!-- Javascript framework and plugins end here -->
</body>
</html>