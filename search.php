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
		<link rel="stylesheet" href="styles/audioplayer.css" />
		
	</head>
	<body style="padding-top:65px;">	
		<?php include("navbar.html"); ?>

		<div class="container body-content">

			<div class="row">
				<div class="col col-md-12">
					<h1>Search</h1>
					<h2>Search for sound effects and music.</h2>					
				</div>
			</div>
			
			<div id="" class="row">
				<div class="col col-md-12">
					
					<div id="wrapper">
						<audio preload="auto" controls>
							<source src="audio/sfx/BlueDucks_FourFlossFiveSix.wav">
							<source src="audio/sfx/BlueDucks_FourFlossFiveSix.mp3">
							<source src="audio/sfx/BlueDucks_FourFlossFiveSix.ogg">
						</audio>
						<script src="script/jquery.js"></script>
						<script src="script/audioplayer.js"></script>
						<script>$( function() { $( 'audio' ).audioPlayer(); } );</script>

					</div>					
					
				</div>
			</div>
			
		</div>
	
		<?php include("footer.html"); ?>
	</body>
</html>