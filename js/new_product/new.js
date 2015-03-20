/*************** Takes to the Home Page After Clicking the No BTN **************************************/

$(document).ready(function(){

		// To load to home page if not the order they wanted if click on 'NO'
	$('#no_correct').click(function(){
		$(location).attr('href','home.php');
	});

});