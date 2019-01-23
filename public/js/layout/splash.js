(function() {

	// add listener to disable scroll
	window.addEventListener('scroll', noscroll);

	var overlay = document.getElementById('loading-wrapper') ; 
	window.addEventListener('load',function() {

		overlay.style.display = "none" ;

		// Remove listener to disable scroll
		window.removeEventListener('scroll', noscroll);
	}); 





})();


	function noscroll() {
 		window.scrollTo( 0, 0 );
}