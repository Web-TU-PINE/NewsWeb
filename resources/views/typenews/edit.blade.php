@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel-heading">
                  Edit Type News
          </div>
          <div class="panel-body">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                  </ul>
            </div>
            @endif
    {!! Form::model($typenews, array('url'=>'typenews/'.$typenews->id,'method'=>'PUT')) !!}
<!--form edit change Word'open' to word'model'  -->
            {{csrf_field()}}
            <div class="col-xs-4">
              <div class="form-group">
                    {{ Form::label('name', 'typenews')}}
                    {{Form::text('name',null,['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-sm-10">
              <div class="form-group">
                     {{Form::submit('save',['class'=>'btn btn-primary'])}}
              </div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
    </div>
</div>
@endsection
