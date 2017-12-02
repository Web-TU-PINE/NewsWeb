<!doctype html>
<html>
<head>
    @include('includes.head')
    @yield('head')
</head>
<style media="screen">
.container {
  width: 100%;
  margin-left: 10px;
  margin-right: 10px;
}
</style>
<body>
<div class="container">

      <div style="margin-bottom:100px;">
          @include('includes.header')
      </div>

    <div>
            <h1>@yield('content')</h1>
    </div>


            @include('includes.footer')

    <!-- <footer class="row">
        @include('includes.footer')
    </footer> -->
  </div>
<!-- </div> -->
</body>
</html>
