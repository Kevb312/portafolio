<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="GeTheme">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>
            @yield('title')
        </title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> 

        <!-- Main css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">

        <!-- Font Awesome Icons CSS -->
        <link rel="stylesheet" href="{{('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Magnific-popup CSS -->
        <link rel="stylesheet" href="{{('css/magnific-popup.css')}}">

        <!-- Google Fonts Link -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet" type="text/css">

        

    </head>
    <body>


        <!-- PRE LOADER -->

        <div class="preloader">
             <div class="sk-spinner sk-spinner-pulse"></div>
        </div>



        <!-- Navigation Section -->

        <div class="navbar navbar-default navbar-static-top">
            <div class="container">

                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a href="{{route('home')}}" class="navbar-brand">KEV.</a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li ><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">Sobre mi</a></li>
                        <li><a href="{{route('service')}}">Servicios</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="contact.html">Contacto</a></li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- Home Section -->
        @yield('homeSection')

        <!-- Portfolio Section -->
        @yield('portfolioSection')

        <!--blogSection -->
        @yield('blogSection')

        <!-- about Section -->
        @yield('aboutSection')

        <!-- service section -->
        @yield('servicetSection')

        <!-- CTA Section -->
        @yield('CTASection')



        <!-- Footer Section -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="footer-copyright">
                            <!--<ul class="social-icon">	
                                <li><a href="#"  data-wow-delay="0.4s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="0.4s"></a></li>
                                <li><a href="#" class="fa fa-linkedin wow fadeInUp" data-wow-delay="0.6s"></a></li>
                                <li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="0.8s"></a></li>
                                <li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1s"></a></li>
                            </ul>-->
                            <p class="small">&copy Copyright 2022  </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>


        <!-- Back top -->

        <a href="#" class="go-top"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
          </svg></a>


        <!-- SCRIPTS -->

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/isotope.js')}}"></script>
        <script src="{{asset('js/imagesloaded.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/magnific-popup-options.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
                

    </body>
</html>