<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Music Store</title>
		<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon" />
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		  <script>
				$(document).ready(function() {
				$('a.login-window').click(function() {
					
							//Getting the variable's value from a link 
					var loginBox = $(this).attr('href');
				
					//Fade in the Popup
					$(loginBox).fadeIn(300);
					
					//Set the center alignment padding + border see css style
					var popMargTop = ($(loginBox).height() + 24) / 2; 
					var popMargLeft = ($(loginBox).width() + 24) / 2; 
					
					$(loginBox).css({ 
						'margin-top' : -popMargTop,
						'margin-left' : -popMargLeft
					});
					
					// Add the mask to body
					$('body').append('<div id="mask"></div>');
					$('#mask').fadeIn(300);
					
					return false;
				});
				
				// When clicking on the button close or the mask layer the popup closed
				$('a.close, #mask').live('click', function() { 
				  $('#mask , .login-popup').fadeOut(300 , function() {
					$('#mask').remove();  
				}); 
				return false;
				});
				});
		  </script>
	</head>
	<body>
		<!---start-wrap--->
		<div class="wrap">
			<!---start-header--->
			<div class="header">
			<div class="sub-header">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" title="logo" /></a>
				</div>
				<div class="sub-header-center">
					<form>
						<input type="text"><input type="submit"  value="search" />
					</form>
				</div>
				<div class="sub-header-right">
					<ul>
						<li><a href="#login-box" class="login-window">Prijava</a></li>
						<li><a href="#">Profil</a></li>
						<li><a href="#">Košarica: (Prazno) <img src="images/cart.png" title="cart" /></a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
			<div class="top-nav">
				<ul>
					<li><a href="index.php">Domov</a></li>
					<li><a href="najljubsi.php">Najljubši</a></li>
					<li class="active1"><a href="izvajalci.php">Izvajalci</a></li>
					<li><a href="kontakt.php">Kontakt</a></li>
					<div class="clear"> </div>
				</ul>
			</div>
            
            <div id="login-box" class="login-popup">
				<a href="index.php" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
  				<form method="post" class="signin" action="#">
					<fieldset class="textbox">
					<label class="username">
						<span>Uporabniško ime</span>
						<input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Uporabniško ime">
					</label>
					<label class="password">
						<span>Geslo</span>
						<input id="password" name="password" value="" type="password" placeholder="Geslo">
					</label>
					<button class="submit button" type="button">Vpiši me!</button>
					<p>
						<a class="forgot" href="#">Ste pozabili geslo?</a>
						<br/>
						<a clas="forgot" href="registriraj.php">Še nimate našega računa?</a>
					</p>        
					</fieldset>
				</form>
			</div>
            
			<!---end-top-header--->
			<!---End-header--->
			</div>
				<div class="content">
					<!--start-cartires-page---->
					<div class="Cartires">
						<h5><span>Izvajalci</span></h5>
						<div class="cartires-grids">
							<div class="cartire-grid">
								<div class="cartire-grid-img">
									<img src="images/a1.jpg" title="tries" />
								</div>
								<div class="cartire-grid-info">
									<ul>
										<li><span>Novo</span>|&nbsp;&nbsp;na voljo !</li>
									</ul>
									<h3>Fondmetal 7500</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</div>
								<div class="cartire-grid-cartinfo">
									<h4>Cena!</h4>
									<span>$502.00</span><br><br>
									<a href="singlepage.html">Dodaj v košarico</a><br />
									<a href="singlepage.html">Več info</a>
								</div>
								<div class="clear"> </div>
							</div><br />
							<div class="cartire-grid">
								<div class="cartire-grid-img">
									<img src="images/a2.jpg" title="tries" />
								</div>
								<div class="cartire-grid-info">
									<ul>
										<li><span>Novo</span>|&nbsp;&nbsp;na voljo !</li>
									</ul>
									<h3>Fondmetal 7500</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</div>
								<div class="cartire-grid-cartinfo">
									<h4>Cena!</h4>
									<span>$502.00</span><br><br>
									<a href="singlepage.html">Dodaj v košarico</a><br />
									<a href="singlepage.html">Več info</a>
								</div>
								<div class="clear"> </div>
							</div><br />
							<div class="cartire-grid">
								<div class="cartire-grid-img">
									<img src="images/a3.jpg" title="tries" />
								</div>
								<div class="cartire-grid-info">
									<ul>
										<li><span>Novo</span>|&nbsp;&nbsp;na voljo !</li>
									</ul>
									<h3>Fondmetal 7500</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</div>
								<div class="cartire-grid-cartinfo">
									<h4>Cena!</h4>
									<span>$502.00</span><br><br>
									<a href="singlepage.html">Dodaj v košarico</a><br />
									<a href="singlepage.html">Več info</a>
								</div>
								<div class="clear"> </div>
							</div><br />
							<div class="cartire-grid">
								<div class="cartire-grid-img">
									<img src="images/a4.jpg" title="tries" />
								</div>
								<div class="cartire-grid-info">
									<ul>
										<li><span>Novo</span>|&nbsp;&nbsp;na voljo !</li>
									</ul>
									<h3>Fondmetal 7500</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</div>
								<div class="cartire-grid-cartinfo">
									<h4>Cena!</h4>
									<span>$502.00</span><br><br>
									<a href="singlepage.html">Dodaj v košarico</a><br />
									<a href="singlepage.html">Več info</a>
								</div>
								<div class="clear"> </div>
							</div><br />
						</div>
					</div>
					<!--End-cartires-page---->
				</div>
			<div class="clear"> </div>
		</div>
			<div class="footer">
				<div class="wrap">
				<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Informacije</h3>
					<ul>
						<li><a href="onas.html">O nas</a></li>
						<li><a href="kontakt.php">Kontakt</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Ponudba</h3>
					<ul>
						<li><a href="novialbumi.php">Novo</a></li>
						<li><a href="najljubsi.php">Najljubši</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Profil</h3>
					<ul>
						<li><a href="registriraj.php">Registracija</a></li>
						<li><a href="vasprofil.php">Vaš profil</a></li>
						<li><a href="urediprofil.php">Uredi profil</a></li>						
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>Povežite se z nami</h3>
					<ul>
						<li><a href="#"><img src="images/facebook.png" title="facebook" /></a></li>
						<li><a href="#"><img src="images/twitter.png" title="Twiiter" /></a></li>
						<li><a href="#"><img src="images/rss.png" title="Rss" /></a></li>
						<li><a href="#"><img src="images/gpluse.png" title="Google+" /></a></li>
					</ul>
					<p>Izdelali smo <a href="#">Rok Černič</a>, <a href="#">Jaka Plut</a>, <a href="#">Robert Rozina</a></p>
				</div>
			</div>
			</div>
		</div>
		<!---End-wrap--->
	</body>
</html>