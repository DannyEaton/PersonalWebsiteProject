<!--
 * Created by PhpStorm.
 * User: Daniel Eaton
 * Date: 11/20/2016
 * Time: 1:32 PM
 -->
<html>
	<head lang="en">
		<?php
		//insert meta tags and links to necessary bootstrap/css/jquery files
		require_once 'util/header.php';
		?>
		<title>Sycamore Holler</title>
	</head>
	<body class="backgroundImg">
		<div class="fluid-container" id="nav-container">
			<nav class="row">
				<div class="logo-section navbar-brand col-xs-12 col-sm-3 col-sm-offset-1 headernav">
					<div class="logofont">Sycamore Holler</div>
				</div>
				<div id="services-header" class="navbar-section navbar-brand col-xs-12 col-sm-2 col-sm-offset-2 logofont headernav">
					Services
				</div>
				<div id="design-header" class="navbar-section navbar-brand col-xs-12 col-sm-2 logofont headernav">
					Designs
				</div>
				<div id="form-header" class="navbar-section navbar-brand col-xs-12 col-sm-2 logofont headernav">
					Quote
				</div>
			</nav>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-12" id="front-container">
					<div class="front-font">Sycamore Holler</div>
					<div class="sub-front-font">When You Need More For Your Website</div>
				</div>
			</div>
		</div>
		<!---------------------------- SERVICES SECTION   ---------------------------->
		<section class="container" id="services-container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-font text-center">Services</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4" id="service-image-1">
					<div class="sevices-image-container">
						<img class="services-image" src="util/css/img/chart.png" alt="chart"/>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4" id="service-image-2">
					<div class="sevices-image-container">
						<img class="services-image" src="util/css/img/security.png" alt="Security"/>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4" id="service-image-3">
					<div class="sevices-image-container">
						<img class="services-image" src="util/css/img/dollar.png" alt="Money"/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 services-font">
					Sycamore Holler is a well known  web development firm established in Albuquerque, New Mexico. Our web developers are very passionate and love what they do, which separates us from most firms in the United States. We also work with the latest technology, such as Angular 2, React, and Vue, along with tried and true languages such as HTML5, CSS, Javascript, PHP, and Java. Our front end developers are second to none and have been working in the software industry for over 25 years. Our sales representatives work with both you and our developers every step of the way to make sure your needs are met, because at Sycamore Holler we value customer service. Whether you are looking to have your website touched up or are creating the next Artificial Intelligence Service, Sycamore Holler Web Development will accomodate your every need. We are located at 1600 Pennsylvania Avenue if you ever want to step inside our offices or you can scroll to the bottom of our website to fill out our form, which is said to be one of best forms on the internet today.</div>
			</div>
		</section>
		<!----------------------- DESIGN SECTION   -------------------------------->
		<section class="container test3" id="design-container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-font text-center">Design</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-offset-1 col-md-4">
					<a data-toggle="modal" data-target="#modal1"><div id="design1" class="design-choice-left text-center logofont">Buttons</div></a>
				</div>
				<div class="col-xs-6 col-md-offset-2 col-md-4">
					<a data-toggle="modal" data-target="#modal2"><div id="design2" class="design-choice-right text-center logofont">Gradients</div></a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-offset-1 col-md-4">
					<a data-toggle="modal" data-target="#modal3"> <div id="design3" class="design-choice-left text-center logofont">Animation</div></a>
				</div>
				<div class="col-xs-6 col-md-offset-2 col-md-4">
					<a data-toggle="modal" data-target="#modal4"><div id="design4" class="design-choice-right text-center logofont">Design</div></a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-offset-1 col-md-4">
					<a data-toggle="modal" data-target="#modal5"> <div id="design5" class="design-choice-left text-center logofont">Design</div></a>
				</div>
				<div class="col-xs-6 col-md-offset-2 col-md-4">
					<a data-toggle="modal" data-target="#modal6"><div id="design6" class="design-choice-right text-center logofont">Design</div></a>
				</div>
			</div>
		</section>

		<!---------------------------- FORM SECTION   --------------------------------------------------->
		<section class="container test4" id="form-container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-font text-center">Request A Quote</div>
				</div>
			</div>
			<!---------- FORM BEGINS HERE ----------->
			<form class="test" id="contact-form" action="util/php-mailer.php" method="post">
			<div class="row">
				<div class="col-sm-12 form-container">
					<div class="form-group">
						<label for="firstName">First Name</label>
						<input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
					</div>
				</div>
				<div class="col-sm-12 form-container">
					<div class="form-group">
						<label for="lastName">Last Name</label>
						<input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 form-container">
					<div class="form-group">
						<label for="emailAddress">Email address</label>
						<input type="email" name="emailAddress" class="form-control" id="emailAddress" placeholder="Email">
					</div>
				</div>
				<div class="col-sm-12 form-container">
					<div class="form-group">
						<label for="telephoneNumber">Telephone</label>
						<input type="tel" name="telephoneNumber" class="form-control" id="telephoneNumber" placeholder="Telephone">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 form-container">
					<div class="form-group">
						<label for="information">General Information About Request</label>
						<textarea class="form-control" name="information" id="information" placeholder="Information">
						</textarea>
					</div>
				</div>
			</div>
				<div class="g-recaptcha" data-sitekey="6LfZHg4UAAAAAA6BKK1lmjT3rxSwE9edmE4WwQqR"></div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</section>
		<footer class="black">
			<div class="container">
				<div class="footer-text col-xs-12">
					Copyright Danny Eaton
				</div>
			</div>
		</footer>
		<!-------------------- MODAL 1 -------------------------------->
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-------------------- MODAL 1 -------------------------------->
		<div id="modal1" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						<!-- Standard button -->
						<button type="button" class="btn btn-default">Default</button>

						<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
						<button type="button" class="btn btn-primary">Primary</button>

						<!-- Indicates a successful or positive action -->
						<button type="button" class="btn btn-success">Success</button>

						<!-- Contextual button for informational alert messages -->
						<button type="button" class="btn btn-info">Info</button>

						<!-- Indicates caution should be taken with this action -->
						<button type="button" class="btn btn-warning">Warning</button>

						<!-- Indicates a dangerous or potentially negative action -->
						<button type="button" class="btn btn-danger">Danger</button>

						<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
						<button type="button" class="btn btn-link">Link</button>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-------------------- MODAL 2 -------------------------------->
		<div id="modal2" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content gradient">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						<p>This is a gradient, made with the finest colors.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-------------------- MODAL 3 -------------------------------->
		<div id="modal3" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						<p class="animated flip">This Modal Is Animated</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-------------------- MODAL 1 -------------------------------->
		<div id="modal4" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-------------------- MODAL 1 -------------------------------->
		<div id="modal5" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-------------------- MODAL 1 -------------------------------->
		<div id="modal6" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="util/general.js"></script>
</html>
