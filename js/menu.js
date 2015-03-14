/************* Menu Animations ******************************************/

$(document).ready(function(){
	$('li').hover(function(){
		$(this).stop(true).animate({width: "220px"}, 300);
	}, function(){
		$(this).stop(true).animate({width: "138px"}, 200);
	});	
});