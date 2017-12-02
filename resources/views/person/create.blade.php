@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel-heading">
                  Add  News
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
          {!! Form::open(array('url' => 'person','files'=>true)) !!}

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
                    {{Form::textarea ('position',null,['class'=>'form-control'])}}
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

@section('footer')

    @if(session()->has('status'))
      <script type="text/javascript">
      swal({
          title:'<?php echo session()->get('status');?>',
          text:'success',
          type:'success',
          timer:2000
          })
      </script>
    @endif

@endsection
