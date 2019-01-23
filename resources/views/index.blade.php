@extends('layout.app')

@section('content')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">

        

              <header class="h-100">
<!--                   <div class="overlay">
                      <a href="#choice">
                          <svg class="arrows">
                          <path class="a1" d="M0 0 L30 32 L60 0"></path>
                          <path class="a2" d="M0 20 L30 52 L60 20"></path>
                          <path class="a3" d="M0 40 L30 72 L60 40"></path>
                        </svg>
                      </a>
                  </div> -->




        

                <!-- Start Choice Registrations -->

               <section class="choice h-50 my-auto" id="choice">
                    <div class="container ">
                       <div class="row">

                            <!--Start Aderants --> 
                                <button class=" btn col-12 col-md-5 p-4 mt-md-0" onclick=' window.location="{{ route('form.aderant') }}" '>
                                   <h1>adhérent</h1> 
                                   <p>les personnes qui ont déjà procèdé à la phase d'adhésion , et qui ont déjà fait la télé-déclation auparavant <span> mot de passe & login à fournir</span></p>
                                </button>

                            <!-- End Aderants -->
                            
                            <!--Start Non-Aderants -->
                                <button class=" btn col-12 col-md-5 p-4 offset-md-1 mt-md-0" onclick=' window.location="{{ route('form.non.aderant') }}" ' ">
                                    <h1>non adhérent</h1>
                                    <p>les personnes n'ayant pas login et mot de passe , ils demandent récemment l'adhésion à la télé-déclaration <span>identifiant fiscal & code d'accès auprés de la DGI </span></p>
                                </button>
                            <!--End Non-Aderants -->
                        
                        </div>
                   </div>
               </section>



                <!-- End Choice Registrations -->


            </header>

              <!-- Start Info Section -->

                <section class="info p-5 row m-0">
                    
                    <!-- Start Joinded Pieces -->
                    
                    <div class="container">
                        <div class="row">
                            <h2 class="mx-auto mb-2 text-center">les pièces jointes & justificatives </h2>
                            <div class="pieces m-auto text-center ">
                              <ul class="p-2">
                                <li>
                                le bordereau de versement 200 dh sur le compte n° 230810 <span>8103835</span> 21100550012 aimane el basraoui <span>cih bank</span>
                                </li>
                                <li>
                                  contrats de bail pour les revenus fonciers 
                                </li>
                                <li>
                                  attestation de salaire et de pensions ou rente viagère pour les revenus salariaux 
                                </li>
                                <li>
                                  contrats de bail &/ou attestation de salaire &/ou de pensions ou rente viagère pour les revenus et profits de source étrangère
                                </li>
                              </ul>

                            </div>
                        </div>

                    </div>

                    <!-- End Joinded Pieces -->

                </section>

                <!-- Start Info Section -->

                <!-- Start Notice -->

                <section class="notice p-2 row m-0">
                    <div class="container">
                        <div class="p-3">
                            <p class="text-center text-capitalize">
                            si vous avez oublié votre <span>mot de passe</span> , n'hésitez pas à nous contacter en mentionnant votre <span>identifiant fiscal</span>
                            </p>
                        </div>
                    </div>                 
                </section>

                <!-- End Notice -->

<!-- Java Script -->

    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>

<!-- Java Script -->


@endsection


