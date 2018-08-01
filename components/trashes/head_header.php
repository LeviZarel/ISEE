<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ISE&E S.R.L.</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" /> 
<link href="css/style.css" rel="stylesheet" />
<!-- Vendor Styles -->
<link href="css/magnific-popup.css" rel="stylesheet"> 
<!-- Block Styles -->
<link href="css/gallery-1.css" rel="stylesheet">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
</head>
<body>
<!-- init modal -->
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ingresar al sistema</h4>
      </div>
      <div class="modal-body">
        <form class="form-signin" role="form" action="login.php" method="post">
          <input class="form-control" placeholder="Usuario" required="" autofocus="" type="user">
          <input class="form-control" placeholder="Contraseña" required="" type="password">
          <label class="checkbox">
            <input value="remember-me" type="checkbox"> Recordar contraseña
          </label>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-primary">Ingresar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div> -->
    </div>
  </div>
</div>
<!-- fin modal -->
<div id="wrapper" class="home-page">
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-md-12"> 	  
					<p class="pull-left hidden-xs"><i class="fa fa-clock-o"></i><span>Lun - Sab 8.00 - 18.00. Domingo CERRADO</span></p>
					<p class="pull-right"><i class="fa fa-phone"></i>Tel No. (+001) 123-456-789</p>
				</div>
			</div>
		</div>
	</div><!-- fin: topbar -->
	<!-- start header -->
	<header>
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="img/iseye.png" alt="logo"/></a>
				</div><!-- fin: navbar-header -->
				<div class="navbar-collapse collapse ">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Inicio</a></li> 
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">Quienes somos<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="about.php">ISE&E S.R.L.</a></li>
								<li><a href="about.php#why">¿Por qué elegirnos?</a></li>
							</ul>
						</li><!-- fin: dropdown --> 
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">Servicios<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="services.php?service=1">Integral en Computación</a></li>
								<li><a href="services.php?service=2">Seguridad en redes</a></li>
								<li><a href="services.php?service=3">Mantenimientos</a></li>
								<li><a href="services.php?service=4">Telecomunicaciones</a></li>
								<li><a href="services.php?service=5">Centro autorizado EPSON</a></li>
								<li><a href="services.php?service=6">Capacitación a clientes</a></li>
								<li><a href="services.php?service=7">Paginas web</a></li>
							</ul>
						</li><!-- fin: dropdown --> 
						<!-- <li><a href="services.php">Servicios</a></li> -->	
						<!-- <li><a href="portfolio.php">Portafolio</a></li> -->
						<li><a href="pricing.php">Precios</a></li>
						<li><a href="contact.php">Contactatenos</a></li>
						<li><a href="#" data-toggle="modal" data-target="#smallModal">Ingresar</a></li>
					</ul><!-- fin: nav navbar-nav -->
				</div><!-- fin: navbar-collapse collapse -->
				</div>
			</div><!-- container -->
		</div><!-- fin: navbar navbar-default navbar-static-top -->
	</header>
