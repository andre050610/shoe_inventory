/****************Enlarges the image**************************/

$(document).ready(function(){
	click_img = true;
	
	$('.img_click').click(function(){
		if (click_img){
			$(this).animate({width: '300px', height: '300px'},100);
			click_img = false;
		}

		else {
			$(this).animate({width: '200px', height: '150px'},100);
			click_img = true;
		}
	});
});