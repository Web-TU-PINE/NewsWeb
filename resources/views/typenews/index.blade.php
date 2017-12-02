@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
          <a href="{{url('typenews/create')}}" class="btn btn-primary">Add data</a>
          <div class="panel-heading">
                  Typenews  
          </div>
          <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                  <th>ID</th>
                  <th>Type</th>
                  <th>Tools</th>
                </tr>
                  @foreach($typeNews as $typenews)
                <tr>
                  <td>{{$typenews->id }}</td>
                  <td>{{$typenews->name }}</td>
                  <td>
                      <a href="{{url('/typenews/show/'.$typenews->id)}}">More Detail>></a>
                      <a href="{{url('/typenews/'.$typenews->id).'/edit'}}">Edit>></a>
                      <a href="{{url('/typenews/delete/'.$typenews->id)}}">delete>></a>

                  </td>
                </tr>
                  @endforeach
            </table>
                {!!  $typeNews->render() !!}
          </div>
        </div>
    </div>
</div>
@endsection
