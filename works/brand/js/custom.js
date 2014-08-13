$(document).ready(function(){

// hide all pages apart from landing page
	$(".page1, .page2, .page3").hide();

// when click start button thing shows one by one, with music starts

	$(".start-button"). on("click", function() {
		$(".landingpage").hide("bounce", 2000);
		document.getElementById("sweet").play();

		$(".page1")
		.delay(3000)
		.show("slide", "fast")
		.delay(40000)
		.hide("pulsate", "slow");	

		$(".page2")
		.delay(45000)
		.show("fold", 10000)
		.delay(50000)
		.hide("size", 10000);


		$(".page3")
		.delay(117000)
		.show("explode", 8000)
		.delay(30000)
		.hide("explode", 5000)
	});

})