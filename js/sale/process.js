/************* Takes to the Home Page in 1 1/2 Seconds **************************************/

$(document).ready(function(){

		// Waits for a 1 1/2 seconds before going to the home page
	setTimeout(function(){
		$(location).attr('href','../home.php');
	}, 3000);

});