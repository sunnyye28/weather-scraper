<?php
	

?>


<!DOCTYPE html>

<html>

<head>
	<title>Weather Scraper</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	<!--Installing Bootstrap css file-->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<!--Installing Bootstrap optional theme css file-->
	<link rel="stylesheet" href="css/bootstrap.theme.css" type="text/css">
	<!--Adding Custom CSS styles-->
	<link rel="stylesheet" href="css/custom.css" type="text/css">
	<!--Installing jQuery 1.11.2-->
	<script src="js/jquery-1.11.2.js"></script>
	<!--Installing Bootstrap javascript file-->
	<script src="js/bootstrap.js"></script>
	
</head>

<body>
	<header>
	</header>

	<div id="main-wrapper" class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<h1>Weather Predictor</h1>
				<p class="lead center">Enter your city below to get a forecast for the weather.</p>
				<form>
					<div class="form-group center">
						<input type="text" id="input-city" class="form-control" name="city" placeholder="Eg. Paris, New York, Beijing" />
					</div>
					<div class="form-group center">
						<input type="submit" id="submit-button" class="btn btn-lg btn-primary" name="submit" value="Find My Weather"/>
					</div>
				</form>

				<div id="success" class="alert alert-success">Success!</div>
				<div id="fail" class="alert alert-danger">Could not found weather data for that city. Please try again.</div>
				<div id="no-city" class="alert alert-danger">Please enter a city.</div>
			</div>
		</div>
	</div>

	<footer>
	</footer>


	<script src="js/connectScraper.js"></script>
</body>
	

</html>