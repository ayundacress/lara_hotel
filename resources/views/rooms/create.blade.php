@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Book Room</div>
          <div class="panel-body">
            <form action="{{ url('/rooms/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Type Room</label>
                  <input type="text" class="form-control" name="type" placeholder="Enter Your Type Room">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Enter Your Price">
                  </div>
                <div class="form-group">
                  <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()