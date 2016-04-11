<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shop prototype</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
	
	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  </head>
  <body>
	
	<div class="container-fluid">
		<div class="bgCol">
		
			<?php 
				require "header.php"; 
				require "navbar.php";
			?>
		
			<div id="content" class="well well-lg contentWellCol">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<?php 
							require "navbarVertical.php"; 
						?></div
					</div>
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<?php 
							require "productGrid.php"; 
						?></div
					</div>
					
				</div>
			</div>
		
			<?php 
				require "footer.php"; 
			?>			
		
		</div>

		
	</div>
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
  </body>
</html>