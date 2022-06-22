@extends('plantilla')

@section('title')
    Kev - Home
@endsection

<!-- Home Section -->
@section('homeSection')
    <section id="home" class="main">
        <div class="container">
            <div class="row">
                @foreach($post as $p)
                <div class="col-md-12 col-sm-12" style="padding-top: 10rem" style="margin-top: 5rem">
                    
                        <img src="{{asset('public/img/'.$p->image)}}" class="img-thumbnail" width="50%">
                    
                </div>
                <div class="col-md-12 col-sm-12" style="padding-top: 2rem">
                    <h3>{{$p->title}}</h3>
                    <h6>Por: {{$p->name}}</h6>
                    <h6>Publicado: {{$p->created_at}}</h6>
                    <h6>Categoría: {{$p->nombreCategoria}}</h6>
                </div>

                <div class="col-md-12 col-sm-12" style="padding-top: 2rem">
                    {!!$p->content!!}
                   
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection