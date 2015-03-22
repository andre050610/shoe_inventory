/****************** Opens the Inventory Div ******************************************/

$(document).ready(function(){
	$('#inventory_tble').hide();

	$('#btn_inventory').click(function(){
		$('#inventory_tble').show('slow');
	});

	$('#inventory_tble').hover(function(){

	}, function(){
		$('#inventory_tble').hide('slow');
	});
});