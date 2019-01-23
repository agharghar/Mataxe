@extends('layout.app')

@section('content')

	<!-- Start Css -->
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/form/form.css') }}">
	
	<!-- End  Css -->
<header>
	
	<section class="form p-4" >

			@if(Request::route()->getName() === "form.aderant")
			<div class="row justify-content-center my-5">
				<h1 class="mb-4">adhérent</h1>
			</div>
			<form class="" action="{{route('form.aderant.post')}}" method="post" enctype="multipart/form-data" role="form">
				<meta name="csrf-token" content="{{ csrf_token() }}">
				<div class="container">

					<!-- InFormation Credentials -->
					
						<div class="form-group row justify-content-center">
						    <label for="login" class="col-4 col-form-label">login</label>
						    <div class="col-md-4 col-6">
						      <input type="text" class="form-control" id="login" name="login" placeholder="Login" autofocus required>
						    </div>
						</div>
						<div class="form-group row justify-content-center">
						    <label for="password" class="col-4 col-form-label">password</label>
						    <div class="col-md-4 col-6">
						      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
						    </div>
						</div>	

				

			@else
				<div class="row justify-content-center my-5">
					<h1 class="mb-4">non adhérent</h1>
				</div>
				<form action="{{route('form.non.aderant.post')}}" method="post" enctype="multipart/form-data">
					<meta name="csrf-token" content="{{ csrf_token() }}">
					<div class="container">

				<!-- InFormation Credentials -->

					<div class="form-group row justify-content-center">
					    <label for="identifiant_fiscal" class="col-4 col-form-label">identifient fiscal</label>
					    <div class="col-md-4 col-6">
					      <input type="text" class="form-control" id="identifiant_fiscal" name="identifiant_fiscal" placeholder="Identifient Fiscal" autofocus required>
					    </div>
					</div>
					<div class="form-group row justify-content-center">
					    <label for="code_dacces" class="col-4 col-form-label">code d'accès </label>
					    <div class="col-md-4 col-6" >
					      <input type="text" class="form-control" id="code_dacces" name="code_dacces" placeholder="Code D'accès" required>
					    </div>
					</div>	

			@endif


			<!-- InFormation Credentials -->

		    <!-- Information Personnels -->
			
				<div class="form-group row justify-content-center">
				    <label for="nom" class="col-4 col-form-label">nom</label>
				    <div class="col-md-4 col-6">
				      <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
				    </div>
				</div>
				<div class="form-group row justify-content-center">
				    <label for="prenom" class="col-4 col-form-label">prenom</label>
				    <div class="col-md-4 col-6">
				      <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" required>
				    </div>
				</div>
				<div class="form-group row justify-content-center">
				    <label for="tele" class="col-4 col-form-label">téléphone</label>
				    <div class="col-md-4 col-6">
				      <input type="text" class="form-control" id="tele" name="tele" placeholder="Téléphone">
				    </div>
				</div>
				<div class="form-group row justify-content-center">
				    <label for="cin" class="col-4 col-form-label">n° <span class="text-uppercase">cin</span> ou Carte séjour</label>
				    <div class="col-md-4 col-6">
				      <input type="text" class="form-control" id="cin" name="cin" placeholder="N°" required>
				    </div>
				</div>
				<div class="form-group row justify-content-center">
				    <label for="email" class="col-4 col-form-label">email</label>
				    <div class="col-md-4 col-6">
				      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required >
				    </div>
			    </div>

			    <!-- Information Personnels -->

			    <!-- Type De Revenus -->

				<div class="form-group row justify-content-center justify-content-center ">
					<div class="col-md-4 col-6"></div>
					<div class="custom-control col-md-4 col-6 justify-content-center text-center custom-checkbox text">
					  <input type="checkbox" class="custom-control-input" name="type_revenus[]" value="fonciers" id="fonciers" >
					  <label class="custom-control-label" for="fonciers">fonciers</label>
					</div>
				</div>	
				<div class="form-group row justify-content-center justify-content-center ">
					<div class="col-md-4 col-6">
						<label>types de revenus</label>
					</div>
					<div class="custom-control  col-md-4 col-6 justify-content-center text-center custom-checkbox text">
					  <input type="checkbox" class="custom-control-input" name="type_revenus[]" value="salariaux" id="salariaux" >
					  <label class="custom-control-label" for="salariaux">salariaux</label>
					</div>
				</div>
				<div class="form-group row justify-content-center justify-content-center">
					<div class="col-md-4 col-6"></div>
					<div class="custom-control col-md-4 col-6 justify-content-center text-center custom-checkbox text">
					  <input type="checkbox" class="custom-control-input" name="type_revenus[]" value="autre_sources" id="autre_sources" >
					  <label class="custom-control-label" for="autre_sources">autre sources étrangères</label>
					</div>
				</div>
			    <!-- Type De Revenus -->

			    <!-- Start Import Document -->

			    <div class="input-group form-group row justify-content-center">
			    	<div class="col-md-4 col-6">
			    		<label for="file">pièces jointes</label>
			    	</div>
				    <div class="custom-file col-md-4 col-6 c justify-content-center text-center">
					  <input type="file" class="custom-file-input w-100" id="file" name="file[]" multiple required>
					  <label class="custom-file-label overflow-hidden w-100" for="file">choisissez vos documents</label>
					</div>
				</div>

			    <!-- End Import Document -->
			    <div class="row mt-5 justify-content-center">
			   		<input type="submit" class=" col-3 btn">
			    </div>
			</div>
		</form>
		<div class="row my-5"></div>

	</section>

</header>
<!-- Start Model  -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="sucsses" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="alert alert-success m-0 p-4 text-center" role="alert">
			  <h4 class="alert-heading"></h4>
		</div>
    </div>
  </div>
</div>

<!-- End Model  -->








<!-- Start JS -->
    <script type="text/javascript" src="{{ asset('js/from/global_validator.js') }}"></script>
    
	@if(Request::route()->getName() === "form.aderant")

    <script type="text/javascript" src="{{ asset('js/from/aderant/insert_post.js') }}"></script>

	@else
    <script type="text/javascript" src="{{ asset('js/from/non_aderant/insert_post.js') }}"></script>


	@endif



<!-- End JS -->








@endsection