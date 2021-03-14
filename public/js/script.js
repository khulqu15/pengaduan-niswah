
// parallaxx

$(window).scroll(function(){
	var wScroll = $(this).scrollTop();
	console.log(wScroll);	
	// navbar
	if(wScroll > 10){
		$('#nav').removeClass('my-nav');
		$('#nav').addClass('bg-info');
		$('#nav').removeClass('navbar-info');
		$('#nav').addClass('navbar-info');	
		$('nav').css({
			"box-shadow": "none" 
		});	
	}else{
		$('nav').css({
			"box-shadow": "0px 5px 15px rgba(0, 0, 0, 0.5)" 
		});
		$('#nav').removeClass('bg-info');
		$('#nav').addClass('my-nav');
		$('#nav').addClass('navbar-info');
		$('#nav').removeClass('navbar-info');	
	}

});

