<?php
	
	//the city name that the user inputs from the form is extracted using GET method, and stored as the variable 'city'
	//Any spaces in the city name that the user inputs is replaced with a dash. weather forecast website must have dash instead of space to be able to return the forecast
	$city = $_GET["city"];
	$city = str_replace(" ", "-", $city);

	//using file get contents function to extract entire web page from weather-forecast.com, then saving it into the 'contents' variable
	//in the URL, city variable is inserted into the address, so that the information for the user inputted city is retrieved
	//".city." did not work, had to use '.city.' and keep it same with the url link
	$contents = file_get_contents('http://www.weather-forecast.com/locations/'.$city.'/forecasts/latest');

	//get the 4-7 day weather forecast summary
	//search the 'contents' variable, for the pattern '/7 Day... and store the results in the 'matches' variable, as an array
	preg_match('/7 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)<\/span>/s', $contents, $matches);
	print_r($matches[1]);
?>