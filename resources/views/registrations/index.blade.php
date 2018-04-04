@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/registrations/create') }}" class="btn btn-primary btn-sm">Add Order <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Day</th>
              <th>type kamar</th>
              <th>harga</th>
      
            </tr>
          </thead>
          <tbody>
            @foreach($regist as $regist)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $regist->name }}</td>
              <td>{{ $regist->day }}</td>
              <td>{{ $regist->type }}</td>
              <td>{{ $regist->price }}</td>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()