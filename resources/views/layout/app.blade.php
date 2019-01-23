<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'MaTaxe') }}</title>

            <!-- Splash js/css -->
            
            <link rel="stylesheet" type="text/css" href="{{ asset('css/layout/splash.css') }}">
                      <!-- Start Splash -->
            <div id="loading-wrapper">
              <div id="loading-text"></div>
              <div id="loading-content"></div>
            </div>

          <!-- End Splash -->
            <script type="text/javascript" src="{{ asset('js/layout/splash.js') }}"></script>

            <!-- Splash js/css -->
            
            <!-- Jquery -->

            <script 
                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous">
            </script>
          <!-- Jquery -->

          <!-- Bootstrap -->

         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

           <!-- Bootstrap -->
        
        <!-- Bootstrap v4 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <!-- Bootstrap v4 -->
        
        <!-- Css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layout/app.css') }}">
        <!-- Css -->

       
    </head>
    <body>



          <!-- Start NavBar -->

          <nav class="navbar navbar-expand-lg navbar-dark ">
              <div class="container">

                    <a class="navbar-brand d-block m-auto m-md-0"" href="/" >Mataxe</a>
                    

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarText">
                  <ul class="navbar-nav ml-auto mr-3">
                    @if(Request::route()->getName() === "index")
                      <li class="nav-item active">
                    
                    @else
                     <li class="nav-item">
                    
                    @endif
                      <a class="nav-link" href="/">home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link contact"  href="#contact">contactez nous</a>
                    </li>
                    @if(Request::route()->getName() === "qui-nous-sommes")
                      <li class="nav-item active">
                    
                    @else
                     <li class="nav-item">
                    
                    @endif
                      <a class="nav-link" href="{{ route('qui-nous-sommes') }}">qui sommes-Nous</a>
                    </li>
                  </ul>
                </div>
              </div>
          </nav>

         <!-- End NavBar -->

      <div id="buttonTop">
      <i class="fas fa-chevron-circle-up"></i>
      </div>



           <!-- Start Main  -->
        <main>
          
          @yield('content')

        </main>

        <!-- End Main  -->



            <!-- Start Footer -->

            <footer >
                <!-- Start Contact From -->

                <div class="myform p-3" id="contact"> 
                    <div class="row">
                          <div class="col-12 col-md-3 offset-md-2 text-center">                        
                            <h2>Contact</h2>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-10 offset-1 col-md-5 ">
                              <form id="contact-form" class="form" action="{{route('contact.post')}}" method="POST" role="form">
                                @csrf
                                  <div class="form-group">
                                      <label class="form-label" for="name">Nom</label>
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Nom" tabindex="1" required maxlength="50">
                                  </div>                            
                                  <div class="form-group">
                                      <label class="form-label" for="email">Email</label>
                                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2" required maxlength="50">
                                  </div>                            
                                  <div class="form-group">
                                      <label class="form-label" for="subject">Sujet</label>
                                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" tabindex="3" maxlength="100">
                                  </div>                            
                                  <div class="form-group">
                                      <label class="form-label" for="message">Message</label>
                                      <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4" maxlength="500" required></textarea>                                 
                                  </div>
                                  <div class="text-center col">
                                      <button type="submit" class="btn btn-start-order">envoyer</button>
                                  </div>
                              </form>
                          </div>

                          <div class="col-10 offset-1 col-md-5 my-auto">
                            <div class="row mb-4">
                              <i class="fas fa-phone-square col-3"></i>
                                <label><span>(+212)</span> 682351744</label>
                            </div>
                            <div class="row mb-4">
                              <i class="fas fa-envelope-open col-3"></i>
                                <label><span>mataxe.ma19</span>@gmail.com</label>
                            </div>
                            
                          </div>
                      </div>
                    </div>

                <!-- End Contact From -->

                <!-- Start CopyWrite -->
                <section class="copyWrite p-2">
                  
                  <div class="row m-0">
                    <div class="col-12 m-0 text-capitalize">
                      <center>Copyright <i class="fas fa-copyright"></i> 2019 . all right reserved</center>
                    </div>

                  </div>

                </section>

                <!-- End CopyWrite -->
            </footer>

            <!-- End Footer -->
    </body>



    <!-- Javascript -->







    <!-- Font Awsome -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Font Awsome -->

    <!-- Nice Scroll -->
    <script type="text/javascript" src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <!-- Nice Scroll -->

    <!-- Go ToTop -->
    <script type="text/javascript" src="{{ asset('js/jquery.gotop.js') }}"></script>
    <!-- Go ToTop -->

    <!-- My javascript-->
    <script type="text/javascript" src="{{ asset('js/layout/app.js') }}"></script>
    <!-- My javascript-->

    <!-- Javascript -->

</html>
