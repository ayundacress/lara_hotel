@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/guests/create') }}" class="btn btn-primary btn-sm">Add guests <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($guests as $guests)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $guests->name }}</td>
              <td>
                <a href="{{ route('guests.edit', $guests) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('guests.destroy',$guests) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;" onclick=return)>Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()