@extends('layouts.default')
@section('head')
<link rel="stylesheet" href="{{URL::asset('css/credit.css')}}">
@stop
@section('content')
<!-- ALL CREDIT FOR THE SCROLLING TEXT GOES TO
   Craig Buckler
   http://www.sitepoint.com/css3-starwars-scrolling-text/

Blame me for the music via embedded video bit
-->

<div style="overflow:hidden; position:absolute; left:0; top:0; width:50px; height:25px;">
<div style="margin-top:-290px;">
<object width="420" height="315">
  <param name="movie" value="http://www.youtube.com/v/EjMNNpIksaI?version=3&amp;hl=en_US&autoplay=1&amp;autohide=2"></param>
  <param name="allowFullScreen" value="true"></param>
  <param name="allowscriptaccess" value="always"></param>
  <embed src="http://www.youtube.com/v/EjMNNpIksaI?version=3&amp;hl=en_US&autoplay=1&amp;autohide=2" type="application/x-shockwave-flash" width="420" height="315" allowscriptaccess="always" allowfullscreen="true"></embed>
</object>
</div>
</div>

<p id="start">A short time ago in a browser very, very close&hellip;</p>

<h1>Laravel<sub>Project</sub></h1>

<div id="titles">
<div id="titlecontent">

  <p class="center">Create By<br />
    Teerapat Thong-o</p>

  <p>Teerapat Thong-o</p>

  <p>5810742204</p>


  <p class="center">Languages!</p>

  <p>PHP</p>

  <p>HTML</p>

  <p>CSS</p>

    <p class="center">Framework!</p>
    <p>LARAVEL</p>
    <img src="https://scontent.fbkk2-2.fna.fbcdn.net/v/t1.0-9/12919795_1144179072293419_8148068711578924401_n.jpg?oh=74aa63fbc4b27a511d146669b6612e92&oe=59A53D22" alt="">



  <p>THANK YOU</p>
  </div>
</div>
<iframe style="visibility:hidden" width="560" height="315" src="http://www.youtube.com/embed/1KAOq7XX2OY" frameborder="0" allowfullscreen></iframe>
@stop
