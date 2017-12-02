
@extends('layouts.default')
@section('head')
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" href="{{URL::asset('css/showcontent.css')}}">
  @endsection
@section('content')
<section class="publicaciones-blog-home">
      <div class="container">
        <div class="">
          <h2>{{$person -> name}}  <b>Ipsum</b></h2>
          <div class="row-page row">
            <div class="col-page col-sm-10 col-md-10">
              <a href="" class="black fondo-publicacion-home">
                <div class="img-publicacion-principal-home">
                  <img class="img-responsive" src="{{asset('images/'.$News->name_img)}}" width="100">
                </div>
                <div class="contenido-publicacion-principal-home">
                  <h3>{{$person -> position}}</h3>

                </div>

              </a>
            </div>

          </div>
        </div>
      </div>
    </section>
@endsection
