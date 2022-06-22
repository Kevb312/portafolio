@extends('plantilla')

@section('title')
    Kev - About
@endsection


<!-- Home Section -->
@section('homeSection')
    <section id="home" class="main-about">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h1 class="wow fadeInUp head" data-wow-delay="0.6s">About Miniml</h1>
                    <p class="wow fadeInUp lr-pd" data-wow-delay="0.8s">Leading Digital Agency with deep creative insight based in Clifornia, We help Brands and Businesses build communication across Web, Print and Digital Medium. Let's work together.</p>
                </div>

            </div>
        </div>
    </section>
@endsection

<!-- About Section -->
@section('aboutSection')


    <section id="about">
        <div class="container">
            <div class="row">

                <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.8s">
                    <div class="chart" data-percent="85">
                        <div class="chart-icon"><i class="fa fa-laptop"></i></div>
                    </div>
                    <h3>Creative Design</h3>
                </div>

                <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.8s">
                    <div class="chart" data-percent="90">
                        <div class="chart-icon"><i class="fa fa-wordpress"></i></div>
                    </div>
                    <h3>Web Development</h3>
                </div>
                <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.8s">
                    <div class="chart" data-percent="80">
                        <div class="chart-icon"><i class="fa fa-cogs"></i></div>
                    </div>
                    <h3>Graphic Design</h3>
                </div>
                <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.8s">
                    <div class="chart" data-percent="95">
                        <div class="chart-icon"><i class="fa fa-html5"></i></div>
                    </div>
                    <h3>Multimedia</h3>
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