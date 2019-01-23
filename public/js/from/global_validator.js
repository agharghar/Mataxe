$(document).ready(function() {


	$('input[type="submit"]').click(function(event) {
	/* Start Verifiy Checkbox*/

      checked = $("input[type=checkbox]:checked").length;
      if(!checked) {
      	$("input[type=checkbox]").addClass("is-invalid");

      }
      
      if(!$("input[type=file]")[0].files.length){
      	$("input[type=file]").addClass("is-invalid");
      }


    });

	/* End Verifiy Checkbox*/


/*Start Write To Input File On Select Effect */

	$('input[type=file]').change(function(e){

		var name = '' ; 
		$($(this)[0].files).each(function() {
			name = name+'"'+$(this)[0].name+'" , '
		});
		
		$(".custom-file-label").html(name) ; 

	});

/*End Write To Input File On Select Effect */




});

function after_post(data,message) {
	var modal ; 
	if (data) {
		modal = $('#sucsses') ;
		$(".modal .alert .alert-heading").html(message);
	}else{
		modal = $('error') ;
		$(".modal .alert").removeClass("alert-success").addClass("alert-danger");
		$(".modal .alert .alert-heading").html("Une Erreur A Eté Commise");
	}

	$('input:not([type="submit"])').val('') ; 
	$.each($('input[name="type_revenus[]"]:checked'), function () {
		$(this).prop("checked", false);	
	});
	$(".custom-file-label").html("Choisissez Vos Documents ..");
	modal.modal({ show: false}) ; 
	modal.modal('show');
	setTimeout(function(){
		document.location.href="/";
	  }, 1800);
	return ; 

}

