@extends('plantilla')

@section('title')
    Kev - Home
@endsection


<!-- Home Section -->
@section('homeSection')
    <section id="home" class="main">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h1 class="wow fadeInUp head" data-wow-delay="0.6s">Kev Rivera</h1>
                    <p class="wow fadeInUp lr-pd" data-wow-delay="0.8s">Ingeniero de software.</p>
                    
                </div>

            </div>
        </div>
    </section>
@endsection

<!-- Portfolio Section -->
@section('portfolioSection')
    <section id="portfolio">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">

                    <!-- work section -->
                        <div class="work-section wow fadeInUp" data-wow-delay="1s">
                            
                            <ul class="filter-wrapper clearfix">
                                <H5>Mis skills</H5>
                                <li><a href="#" data-filter="*" class="selected opc-main-bg">Mostrar todo</a></li>
                                <li><a href="#" class="opc-main-bg" data-filter=".web">Frontend</a></li>
                                <li><a href="#" class="opc-main-bg" data-filter=".print">Backend</a></li>
                                <li><a href="#" class="opc-main-bg" data-filter=".branding">Desktop</a></li>
                                <li><a href="#" class="opc-main-bg" data-filter=".apps">Base de datos</a></li>
                                <li><a href="#" class="opc-main-bg" data-filter=".html">Otros</a></li>
                            </ul>

                            <!-- work box section -->
                            <div class="work-box-section wow fadeInUp" data-wow-delay="1.4s">
                                <div class="work-box-wrapper col4-work-box">

                                    <div class="work-box graphic print branding html col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/portfolio-img1.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="{{asset('img/portfolio-img1.jpg')}}" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box graphic print col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="{{asset('img/portfolio-img2.jpg')}}" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="{{asset('img/portfolio-img2.jpg')}}" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box branding apps col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="{{asset('img/portfolio-img3.jpg')}}" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="{{asset('img/portfolio-img3.jpg')}}" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box graphic apps col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="{{asset('img/portfolio-img4.jpg')}}" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="{{asset('img/portfolio-img4.jpg')}}" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box web apps col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="{{asset('img/portfolio-img5.jpg')}}" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="{{asset('img/portfolio-img5.jpg')}}" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box web print col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="{{asset('img/portfolio-img6.jpg')}}" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="{{asset('img/portfolio-img6.jpg')}}" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box web html col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="{{asset('img/portfolio-img7.jpg')}}" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="{{asset('img/portfolio-img7.jpg')}}" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box graphic print col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="{{asset('img/portfolio-img8.jpg')}}" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="{{asset('img/portfolio-img8.jpg')}}" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box web print col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="{{asset('img/portfolio-img9.jpg')}}" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="{{asset('img/portfolio-img9.jpg')}}" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                </div>

            </div>
        </div>
    </section>
@endsection

<!-- CTA Section -->
@section('CTASection')
    <section id="cta" class="bg-gray">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <p class="wow fadeInUp" data-wow-delay="0.4s">Ingeniero de software, apasionado por la tecnología. Me especializo en desarrollo web concretamente en el área backend.</p>
                    <p class="wow fadeInUp" data-wow-delay="0.4s">Actualmente me encuentro capacitandome en Angular y React con el fin de abarcar la otra área del desarrollo web.</p>
                    <a href="about.html" class="wow fadeInUp btn btn-success" data-wow-delay="0.8s">SOBRE MI</a>
                </div>

            </div>
        </div>
    </section>
@endsection