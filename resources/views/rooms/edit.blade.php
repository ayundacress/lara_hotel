@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Book Room</div>
      <div class="panel-body">
        <form action="{{ route('rooms.update',$rooms) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="">rooms Name</label>
            <input type="text" name="type" class="form-control" placeholder="Enter Your Type Room" value="<?=$rooms->type?>">
          </div>
          <div class="form-group">
              <label for="">Price</label>
              <input type="number" name="price" class="form-control" placeholder="Enter Your Price" value="<?=$rooms->price?>">
            </div>
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();