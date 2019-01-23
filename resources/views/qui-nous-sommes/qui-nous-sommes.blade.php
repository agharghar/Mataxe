@extends('layout.app')

@section('content')
	<!-- StyleSheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/qui-nous-sommes/qui-nous-sommes.css') }}">
	<!-- StyleSheet -->
	
	<!-- Start Qui Nous Sommes Header -->

	<header class="qui-nous-sommes" >
		
		<div class="elements">
			<div class="element-overlay">
				<div class="row p-3">
					<div class="container">
						<div class="col-12 p-4">
							<h2>vous savez pas comment déclarer votre impôt , taxe <i class="fas fa-question d-md"></i></h2>

						</div>		
						<div class="col-12 p-4">
							<h2>vous avez peur de tomber dans des pénalités  <i class="fas fa-question d-md"></i></h2>

						</div>
						<div class="col-12 p-4">
							<h2>le délai de déclaration est presque terminé  <i class="fas fa-question d-md"></i></h2>

						</div>
						<div class="col-12 p-4">
							<h2>voulez-Vous bien éviter les majorations  <i class="fas fa-question d-md"></i></h2>

						</div>

					</div>
				</div>
				<svg class="arrows" href="#objectif">
                  <path class="a1" d="M0 0 L30 32 L60 0"></path>
                  <path class="a2" d="M0 20 L30 52 L60 20"></path>
                  <path class="a3" d="M0 40 L30 72 L60 40"></path>
                </svg>
			</div>
		</div>



	</header>

<!-- Start Objectif -->	

	<section class="objectif row justify-content-center p-4" id="objectif">
			<div class="align-self-center text-center text-capitalize">
				<div class="container ">
					<p class="p-4">
					notre objectif est de faciliter votre dépôt et paiement éléctronique , dans le délai à un petit prix ,  tout en garantissant la sécurité de vos donnés personnelles . vous recevrez une facture par mail en quelques heures ,  après la validité de votre demande , puis votre reçus en mois de 48h , par lequel vous allez payer votre taxe dans la perception banque , tasshilat ou virement , tout dépend du moyen de paiement choisi 
					</p>
				</div>	
			</div>
	</section>

<!-- Start Objectif -->	
	
	<!-- Start Team -->
	<section class="team mb-5">
		<div class="row">
			<div class="col-6 p-0 img">
				<div class="overlay"></div>
			</div>
			<div class="col-6 p-3 p-md-3">
				<div class="container">
					<div class="row text-center p-md-5">
						<div class="col-12">	
							<p class="">nous sommes des jeunes créatifs qui ont décidé de créer cet entreprise légale  , pour répondre à votre besoin</p>
						</div>
						<div class="col-12 mt-5">
							<h3>identifiant commun de l'entreprise <span> 002145357000075</span></h3>
							<h3>identifiant fiscal <span> 26140618</span></h3>
							<h3>taxe professionnelle <span>  26401299</span></h3>
						</div>
					</div>
				</div>
			</div>
			
		</div>

	</section>

	<!-- End Team -->

	<!-- End Qui Nous Sommes Header -->

<!-- Java Script -->


    <script type="text/javascript" src="{{ asset('js/qui-nous-sommes/qui-nous-sommes.js') }}"></script>

<!-- Java Script -->
@endsection