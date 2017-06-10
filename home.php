<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
		<!-- custom css -->
		<link rel="stylesheet" href="styles/site.css" />
		
	</head>
	<body style="padding-top:65px;">	
		<?php include("navbar.html"); ?>

		<div class="container body-content">

			<div class="row">
				<div class="col col-md-12">
					<h2>Listen and download music and sounds to use in your indie or commercial game dev projects.</h2>					
				</div>
			</div>
			<!--
			<div id="divAudioPlayer" class="divAudioPlayer row">
				<div class="col col-md-12">
					
				</div>
			</div>
			-->
			<div class="row">
				<div class="col col-md-6 categoryTile">
					<div class="categoryTitle">
						<img id ="music-cat" src="./styles/img/music-block-1.png" />
					</div>
				</div>

				<div class="col col-md-6 categoryTile">
					<div class="categoryTitle">
						<img id="sfx-cat" src="./styles/img/sfx-block-1.png" />
					</div>
				</div>
			</div>
			
		</div>
	
		<?php include("footer.html"); ?>
	</body>
</html>