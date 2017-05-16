// hover efekt pri najeti na radek tabulky
$(document).ready(function() {
	// najeti
	$("tr").mouseover(function() {
		$(this).addClass("over");
	});

	// odjeti
	$("tr").mouseout(function() {
		$(this).removeClass("over");}
	);
});