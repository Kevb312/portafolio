@extends('plantilla')

@section('title')
    Kev - Blog
@endsection


@section('blogSection')
    <section id="home" class="main">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h1 class="wow fadeInUp head" data-wow-delay="0.6s">Blog</h1>
                </div>
            </div>
            
        </div>
    </section>

    <div class="container" style="padding-bottom: 5rem" >
        <h3>Últimas entradas...</h3>
    </div>

    <div class="container" data-wow-delay="0.8s">
        <div class="col-md-12">
            <div class="row grid">
                
                    @foreach($posts as $post)       

                        @if($post->status == 1)
                        <div class="col-lg-3 col-md-4">
                            <div class="card"  style="background-color:#f9f9f9">
                                <center><img class="card-img-top" src="{{asset('public/img/'.$post->image)}}" alt="Card image cap"  class="img-thumbnail" width="200px" height="150px"></center>
                                <div class="card-body">
                                <section id="cta" class="bg-gray">
                                    <h3 class="card-title" > {{$post->title}}</h3>
                                   
                                    
                                    <a href="{{route('viewBlog', $post->id)}}" class="wow fadeInUp btn btn-success" data-wow-delay="0.8s">Ver blog</a>
                                </section>
                                </div>
                            </div>    
                        </div>       
                        @endif
                    @endforeach 
                
            </div>
        </div>
    </div>
@endsection

