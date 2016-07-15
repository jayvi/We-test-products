$(document).ready(function(){
	

	$(".btn1").click(function(){
		$("#q1").fadeOut(0);
		$("#q2").fadeIn(500);
		
	});
	$(".btn2").click(function(){
		$("#q2").fadeOut(0);
		$("#q3").fadeIn(500);
	});
	$(".btn3").click(function(){
		$("#q3").fadeOut(0);
		$("#q4").fadeIn(500);
	});
	$(".btn4").click(function(){
		$("#q4").fadeOut(0);
		$("#final").fadeIn(500);
	});

	
});
