$(function() {
	    $( "#location-range" ).slider({
	      range: true,
	      min: 0,
	      max: 50,
	      values: [0, 20],
	      slide: function( event, ui ) {
	        $( "#kilometres" ).val( ui.values[ 0 ] +"km" + " - " + ui.values[ 1 ] +"km" );
	      }
	    });
	    $( "#kilometres" ).val( $( "#location-range" ).slider( "values", 0 ) + "km"+
	      " - " + $( "#location-range" ).slider( "values", 1 ) +"km" );
	  });


