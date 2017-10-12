$(document).ready(function(){
    console.log('dom ready');
    $("#secondary").addClass("hidden-sm hidden-xs");
    
    // to top section
	$(".totop").hide();
	
	$(window).scroll(function(){
	if ($(this).scrollTop() > 300) {
		$('.totop').fadeIn();
	} else {
		$('.totop').fadeOut();
	}
	});
	$(".totop a").click(function(e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});
});