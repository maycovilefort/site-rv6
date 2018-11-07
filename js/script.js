$(document).ready(function () {
	$('.carousel').carousel({interval:5000});
	$("#menudiv2").hide();
});
$(window).scroll(function(){
	
	var width = $(window).width();
	var posicao = $(window).scrollTop();
	
	if(posicao > 110)
	{
		$("#menudiv").hide();
		$("#menudiv2").show();
	}
	else if(posicao < 110)
	{
		$("#menudiv").show();
		$("#menudiv2").hide();
	}
});