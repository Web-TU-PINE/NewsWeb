@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel-heading">
                  Edit  News
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
          {!! Form::model($news,array('url' => 'gallery/'.$news->id,'files'=>true,'method'=>'put')) !!}

            {{csrf_field()}}
            <div class="col-xs-8">
              <div class="form-group">
                    {{ Form::label('name', 'head-content')}}
                    {{Form::text('id',null,['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-xs-8">
                  <div class="form-group">
                        {{ Form::label('images', 'gallery')}}
                        {!!Form::file('images[]',  array('multiple'=>true))!!}
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
