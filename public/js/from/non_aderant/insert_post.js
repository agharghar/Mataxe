$(document).ready(function(){




/*Start Submit By Ajax Non Aderant*/

	$("form").on("submit",function(event) {
		
		event.preventDefault() ; 
		$("[type='submit']").prop("disabled",true);
	    var formData = new FormData(this);

	    $.ajax({
    	    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    } , 
	        url: window.location.origin+'/form/non-aderant/post' ,
	        type: 'POST',
	        data: formData,
	        dataType : 'JSON' , 
	        cache: false,
	        contentType: false,
	        processData: false , 
	        success : function(data) {
	        	 
	        	after_post(1,data.message) ; 
	        },
	        error: function (xhr, ajaxOptions, thrownError) {
				after_post(0,null) ; 
	      }
	    });

});

	
/*End Submit By Ajax Non Aderant*/









});