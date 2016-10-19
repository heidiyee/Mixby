var topMenu = function() {
	$("#nav-icon").click(function(e) {
        $(this).toggleClass("open");
        $("#nav-links").toggleClass("popup");
		// $(".nav-bar > .container").toggleClass("fixed");
		$('.nav-bar').toggleClass('blue');
		e.preventDefault();
	});
};

$(document).ready(topMenu);
