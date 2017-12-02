@extends('layouts.default')
@section('head')
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" href="{{URL::asset('css/content.css')}}">
  @endsection
@section('content')
<section class="publicaciones-blog-home">
      <div class="container">
        <div class="">
          <h2>ข่าวสาร  <b>วิศวะ </b></h2>
          <div class="row-page row">
            @foreach($News as $news)
            <div class="col-page col-sm-8 col-md-6">
              <a href="{{url('/news/show/'.$news->id)}}" class="black fondo-publicacion-home">
                <div class="img-publicacion-principal-home">
                  <img class="img-responsive" src="{{asset('images/'.$news->image)}}">
                </div>
                <div class="contenido-publicacion-principal-home">
                  <h3>{{$news->name}}</h3>

                </div>
                <div class="mascara-enlace-blog-home">
                  <span>More detail>></span>
                </div>
              </a>
            </div>
            @endforeach
        
          </div>
        </div>
      </div>
    </section>
@endsection
