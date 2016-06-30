$(document).ready(function() {
	

$("form").submit(function(event) {

	$value1= $("#in1").val();
	$value2= $("#in2").val();

	if($value1=="" || $value2==""){

		$("#sehv").slideUp(1);
		$("#bos").slideDown();

		 event.preventDefault();

	}else if ($value1!="admin" || $value2!="admin") {
		
		$("#bos").slideUp(1);
		$("#sehv").slideDown();	

		event.preventDefault();
	}
	 
});





});