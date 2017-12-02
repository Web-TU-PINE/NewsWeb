@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel-heading">
                  Menu News {{$Count}} list
          </div>
          <div class="panel-body">
            <a href="{{url('news/create')}}" class="btn btn-primary">Add data</a>
            <table class="table table-bordered">
                <tr>
                  <th>ID</th>
                  <th>Menu</th>
                  <th>img</th>
                  <th>Tools</th>
                </tr>
                  @foreach($News as $news)
                <tr>
                  <td>{{$news->id }}</td>
                  <td>{{$news->name }}</td>
                  <td>
                    <a href="{{asset('images/'.$news->image)}}" data-lity>
                      <img src="{{asset('images_resize/'.$news->image)}}" width="50"height="50"alt="xx"></td>
                    </a>
                  <td>
                    <a href="{{url('/gallery/'.$news->id).'/edit'}}"><button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i></button></a>

                      <a href="{{url('/news/'.$news->id).'/edit'}}"><button type="submit" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                        {!! Form::open(array('url' => 'news/'.$news->id,'method'=>'delete')) !!}<!--'method'=>'delete' วิ่งไปที่ destroy auto-->
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        {!! Form::close()!!}
                  </td>

                </tr>
                  @endforeach
            </table>
                {!!  $News->render() !!}
          </div>
        </div>
    </div>
</div>
@endsection
