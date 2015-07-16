/*Using jQuery, write statements so that:
when submit button (tagged by ID) is clicked, a function runs that gets the data from the PHP scraper
event has to 

*/


$('#submit-button').click(function(event){
	event.preventDefault();

		$(".alert").hide();

	if($('#input-city').val() != ''){
		$.get('scraper.php?city=' + $('#input-city').val(), function(data){
		
		if (data==""){
		
			$("#fail").fadeIn();
		} else{
		
			$('#success').html(data).fadeIn();
		}

	});
	} else if($('#input-city').val() == ''){
		$("#no-city").fadeIn();
	}
	
})