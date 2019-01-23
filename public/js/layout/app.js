$(document).ready(function() {

	/*Start NiceScroll*/


  
	$("html").niceScroll({

		cursoropacitymax: .8,
		cursorborder: "none" ,
	});


	/*End NiceScroll*/
    


	/*Start Up scroll*/


	var btn = $('#buttonTop');

	document.addEventListener('scroll', function (event) {
	  if ($(document).scrollTop() > $("header").scrollTop()+500) {
	    btn.addClass('show');

	  } else {
	    btn.removeClass('show');
	}
		
	}, true /*Capture event*/);


	btn.on('click', function(e) {
	  e.preventDefault();
	  $('html, body').animate({scrollTop:0}, '300');
	});

	/*End Up scroll*/



	// Test for placeholder support
    $.support.placeholder = (function(){
        var i = document.createElement('input');
        return 'placeholder' in i;
    })();

    // Hide labels by default if placeholders are supported
    if($.support.placeholder) {
        $('.form-label').each(function(){
            $(this).addClass('js-hide-label');
        });  

        // Code for adding/removing classes here
        $('.form-group').find('input, textarea').on('keyup blur focus', function(e){
            
            // Cache our selectors
            var $this = $(this),
                $parent = $this.parent().find("label");
					
						switch(e.type) {
							case 'keyup': {
								 $parent.toggleClass('js-hide-label', $this.val() == '');
							} break;
							case 'blur': {
								if( $this.val() == '' ) {
                    $parent.addClass('js-hide-label');
                } else {
                    $parent.removeClass('js-hide-label').addClass('js-unhighlight-label');
                }
							} break;
							case 'focus': {
								if( $this.val() !== '' ) {
                    $parent.removeClass('js-unhighlight-label');
                }
							} break;
							default: break;
						}


        });
    } 

$("	[href ^='#'] ").on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({
  	scrollTop: $($(this).attr("href")).offset().top ,

  }, '300');

});





});