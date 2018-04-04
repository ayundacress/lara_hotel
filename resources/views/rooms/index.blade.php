@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/rooms/create') }}" class="btn btn-primary btn-sm">Add Room <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Type</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($rooms as $rooms)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $rooms->type }}</td>
              <td>{{ $rooms->price }}</td>
              <td>
                <a href="{{ route('rooms.edit', $rooms) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('rooms.destroy',$rooms) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
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