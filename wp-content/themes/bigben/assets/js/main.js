jQuery(document).ready(function() {
	// mobile menu

	jQuery('.hamburger').click(function () {
		jQuery(this).toggleClass('hamburger_active');
		jQuery('.header__footer').stop().slideToggle();
	});
});
