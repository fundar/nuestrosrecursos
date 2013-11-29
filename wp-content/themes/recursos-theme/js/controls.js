$(function () {
	var counter = 1;
	
	$('#next').click( function() {
		if(counter==8) {
			counter=1;
		} else {
			counter+=1;
		}
		
		$('.charts').fadeOut();
		$('#chart_' + counter).show().fadeIn();
	});
	
	$('#prev').click( function() {
		if(counter==1) {
			counter=8;
		} else {
			counter-=1;
		}
		
		$('.charts').fadeOut();
		$('#chart_' + counter).show().fadeIn();
	});
	
});
    
