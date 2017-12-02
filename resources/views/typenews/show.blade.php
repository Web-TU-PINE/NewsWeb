@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
          <div class="panel-heading">
                  Typenews
          </div>
          <div class="panel-body">
                  <p>
                    Type :  {{$typeNews -> name}}<br>
                    Date :  {{$typeNews -> created_at}}
                  </p>
          </div>
        </div>
    </div>
</div>
@endsection
