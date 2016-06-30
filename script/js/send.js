$('#form_input').submit(function(){
	var message=$('#message').val();
	var sender=$('#sender').val();
	$.ajax({
		url:'script/php/send.php',
		data:{sender: sender , message: message},
		success: function(data){
			$('#feedback').html(data); 
				$('#feedback').fadeIn('slow',function(){
					$('#feedback').fadeOut(2000);
				}); 
				$('#message').val('');
		}
	});
	return false;
});