<!DOCTYPE html>
<html ng-app="app1">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shop prototype</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  </head>
  <body>
  <div class="container-fluid removePaddingMargin" ng-controller="ctrl">
	<div class="row">
	<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12  col-lg-offset-1 remPadding">
	
		<div class="bgCol">
		
			<header>
				<?php 
					require "content/header.php"; 
					require "content/navbar.php";
				?>
			</header>
			
			<section id="content">
				<div class="row">
				
						<?php 
							require "content/register.php"; 
						?>
				
				<!-- Bootstrap
					<div class="page-header"> 
						<h2 class="text-center">Products</h2> 
						<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 removePaddingMargin">
						<?php 
							//require "content/navbarVertical.php"; 
						?></div
					</div>
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<?php 
							//require "content/productGrid.php"; 
						?>
					</div>
					 -->
				</div>
			</section>
			<footer>
				<?php 
					require "content/footer.php"; 
				?>			
			</footer>
		</div>

		
	</div>
	</div>
   </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<!-- Angular js -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/history.js"></script>
	<script src="js/imageResize.js"></script>
	<script src="angularjs/ngscripts.js"></script>
  </body>
</html>