$(document).ready(function(){
	$('input.check').on('click', function(){
		var id = $(this).attr('id');
		var mid = 'm'+id;
		
		if( $(this).is(":checked") == true ){
			$('.check'+id).prop('checked', true);
		}else{
			$('.check'+id).prop('checked', false);
		}
		
		
	});

	
	

});