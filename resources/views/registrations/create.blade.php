@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading"><?=$title?></div>
          <div class="panel-body">
            <form action="{{ url('/registrations/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Day</label>
                  <input type="text" name="day" class="form-control" placeholder="Masukan Hari Penginapan">
                </div>
                <div class="form-group">
                  <label>Type Kamar</label>
                  <select name="room_id" class="form-control">
                    <?php foreach($room as $room):?>
                    <option value="<?=$room->id?>"><?=$room->type?> &nbsp; <small>( Rp.<?=$room->price?> )</small></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama Penyewa</label>
                  <select name="guest_id" class="form-control">
                    <?php foreach($guest as $guest):?>
                    <option value="<?=$guest->id?>"><?=$guest->name?></option>
                    <?php endforeach ?>
                  </select>
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