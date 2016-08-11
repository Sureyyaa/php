$("img").click(function() {

	var source = $(this).attr("src");

	$(".image").append("<img src="+source+">");

	$(".image").css('display', 'block');
});


$("button").click(function(){

	$(".image img").remove();

	$(".image").css('display', 'none');
});


$(".imgs").hover(function(){

	$(this).find("a").css('display', 'block');

}, function(){

	$(this).find("a").css('display', 'none');
});


