@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel-heading">
                  Edit  person
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
          {!! Form::model($person,array('url' => 'person/'.$person->id,'files'=>true,'method'=>'put')) !!}

            {{csrf_field()}}
            <div class="col-xs-8">
              <div class="form-group">
                    {{ Form::label('name', 'name')}}
                    {{Form::text('name',null,['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-xs-8">
              <div class="form-group">
                    {{ Form::label('position', 'position')}}
                    {{Form::text('position',null,['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-xs-8">
              <div class="form-group">
                    {{ Form::label('name_img', 'name_img')}}
                    {{Form::file('name_img',null,['class'=>'form-control'])}}
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
