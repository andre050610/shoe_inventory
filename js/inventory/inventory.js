/****************** Opens the Inventory Div ******************************************/

$(document).ready(function(){
	click = false;
	$('#inventory_tble').hide();

	$('#btn_inventory').click(function(){
		if (!click){
			$('#inventory_tble').show('slow');
			click = true;
		}

		else {
			$('#inventory_tble').hide('slow');
			click = false;
		}

	});
});