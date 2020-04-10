jQuery(document).ready(function(){
	jQuery(".formm").on('submit',function(){
		
		var naam = jQuery('input#naam').val();
		var address = jQuery('textarea#address').val();
		
		$.post('practice.php',{'naam':naam,'address':address},function(output){
			jQuery(".information").html(output);
			
		});
		return false;
		
	});
	
});