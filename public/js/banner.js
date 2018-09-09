
var bannerHeight = $("#header-svg").height();

$(window).scroll(function(){
	
	var bannerHeight = $("#header-svg").height();
	
	var currentScroll = $(window).scrollTop();

	if (currentScroll >= bannerHeight) {
		// user scrolls below banner
		$(".navbar").addClass("navbar-fixed-top");
		$(".nav-placeholder").css("display", "block");
	} else if (currentScroll <= bannerHeight) {
		// user scrolls above to see banner
		$(".navbar").removeClass("navbar-fixed-top");
		$(".nav-placeholder").css("display", "none");
	}

}); 