jQuery(document).ready(function($) {
	
	$('#pop_up_dialog').dialog({

		modal: true,
		resizeable: false,
		draggable: false,
		width: 400,
		height: 200,			
		buttons: {
			Close: function() {                    
				$('#pop_up_dialog').dialog("close");
			}
		}

	});		
});

