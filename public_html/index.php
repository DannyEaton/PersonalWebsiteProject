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
				<div class="navbar-section navbar-brand col-xs-12 col-sm-3 col-sm-offset-1 ">
					Sycamore Holler
				</div>
				<div class="navbar-section navbar-brand col-xs-12 col-sm-2 col-sm-offset-2 brand-font">
					Services
				</div>
				<div class="navbar-section navbar-brand col-xs-12 col-sm-2 brand-font headernav">
					Designs
				</div>
				<div class="navbar-section navbar-brand col-xs-12 col-sm-2 brand-font headernav">
					Quote
				</div>
			</nav>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12" id="front-container">
					<div class="front-font">Sycamore Holler</div>
					<div class="sub-front-font">A generic sub header that is a slogan</div>
				</div>
			</div>
		</div>
		<section class="container test2" id="services-container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-font text-center">SERVICES</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="sevices-image-container test4 thumbnail">
						<img class="services-image" src="util/css/img/pepeplaceholder.jpg" alt="placeholder">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="sevices-image-container test4 thumbnail">
						<img class="services-image" src="util/css/img/pepeplaceholder.jpg" alt="placeholder">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="sevices-image-container test4 thumbnail">
						<img class="services-image" src="util/css/img/pepeplaceholder.jpg" alt="placeholder">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum pulvinar varius. Curabitur posuere, velit at viverra vulputate, leo odio molestie nibh, semper consequat sem nisl ac ipsum. Aliquam vehicula orci nec ipsum bibendum, nec suscipit purus auctor. Vivamus non elit in eros bibendum porttitor. Maecenas sit amet diam scelerisque quam aliquet porttitor. Aenean malesuada, purus vel auctor malesuada, libero nisi imperdiet dui, in porttitor sem purus vitae felis. In ultricies quam nisi, et euismod lacus venenatis eget. Pellentesque porttitor tristique arcu, et semper leo sodales et. Donec ornare, lacus nec fermentum hendrerit, purus tortor dictum quam, et consequat arcu justo id lectus. Sed cursus pretium nunc, in scelerisque purus ullamcorper in. Nam tempor nisl quis finibus blandit. Morbi gravida volutpat justo, sed accumsan felis tempor at. Donec et suscipit nibh. Proin lorem libero, dictum scelerisque tristique ut, efficitur sit amet tortor.
					Nunc varius, dui sed laoreet mollis, est massa iaculis ligula, a venenatis nulla lacus ut lectus. Vestibulum vitae sem ut nisl imperdiet consequat vel id mauris. Aenean in sapien rhoncus, posuere dui nec, pellentesque libero. Integer in tincidunt ligula. Donec at porta mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum et justo augue. Pellentesque quam orci, tristique vel magna id, finibus fermentum dolor. Vestibulum id dictum urna, quis mollis velit.
					Nullam vel ligula vitae risus ornare suscipit. Aliquam ut imperdiet arcu. Nunc eu libero a libero sodales consequat id id dui. Sed dictum eleifend nunc, et porta velit sodales iaculis. In vehicula eu dui congue sodales. Praesent efficitur felis nibh, ut egestas arcu interdum eu. Duis laoreet, lorem pharetra ullamcorper tincidunt, quam sem imperdiet quam, id scelerisque enim sapien vel diam. Praesent venenatis leo leo, ac tincidunt massa vestibulum commodo. Nullam nec ligula leo. Proin congue, ipsum elementum ullamcorper ultrices, velit lorem dignissim libero, sed sagittis tortor ante sed orci. Ut ac vulputate purus, ac porta massa.
				</div>
			</div>
		</section>
		<section class="container test3" id="design-container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-font text-center">Design</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-offset-1 col-md-4">
					<div class="design-choice-left text-center test4">Design</div>
				</div>
				<div class="col-xs-6 col-md-offset-2 col-md-4">
					<div class="design-choice-right text-center test4">Design</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-offset-1 col-md-4">
					<div class="design-choice-left text-center test4">Design</div>
				</div>
				<div class="col-xs-6 col-md-offset-2 col-md-4">
					<div class="design-choice-right text-center test4">Design</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-offset-1 col-md-4">
					<div class="design-choice-left text-center test4">Design</div>
				</div>
				<div class="col-xs-6 col-md-offset-2 col-md-4">
					<div class="design-choice-right text-center test4">Design</div>
				</div>
			</div>
		</section>
		<section class="container test4" id="form-container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-font text-center">Request A Quote</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 test2 form-container">
					<div class="form-group">
						<label for="firstName">First Name</label>
						<input type="text" class="form-control" id="firstName" placeholder="First Name">
					</div>
				</div>
				<div class="col-sm-6 test2 form-container">
					<div class="form-group">
						<label for="lastName">Last Name</label>
						<input type="text" class="form-control" id="lastName" placeholder="Last Name">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 test2 form-container">
					<div class="form-group">
						<label for="emailAddress">Email address</label>
						<input type="email" class="form-control" id="emailAddress" placeholder="Email">
					</div>
				</div>
				<div class="col-sm-6 test2 form-container">
					<div class="form-group">
						<label for="telephoneNumber">Telephone</label>
						<input type="tel" class="form-control" id="telephoneNumber" placeholder="Telephone">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 test2 form-container">
					<div class="form-group">
						<label for="information">General Information About Request</label>
						<textarea class="form-control" id="information" placeholder="Information">
						</textarea>
					</div>
				</div>
			</div>
		</section>
		<footer class="black">
			<div class="container">
				<div class="footer-text col-xs-12">
					Copyright Danny Eaton
				</div>
			</div>
		</footer>
	</body>
</html>
