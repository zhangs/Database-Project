function main() {

	// main button starts out hidden
	$('#buttons').hide();
	
	// clicking begin reveals all possible databases
	$("#begin").click(function() {
		$('#begin').fadeOut();
		$('#buttons').fadeIn();		
	});	
}

$(document).ready(function() {
	main();
});