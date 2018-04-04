<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Guest;
use App\Room;
use DB;

class RegistrationController extends Controller
{
    public function index()
    {
        $regist = Registration::All();
        $regist = DB::table('registrations')
            ->join('guests', 'guests.id', '=', 'registrations.guest_id')
            ->join('rooms', 'rooms.id', '=', 'registrations.room_id')
            ->get();
        $data = array(
            'title' => 'index',
            'no'    => 1,
            'regist'  => $regist
        );
        return view('registrations.index',$data);
    } 
    public function create(){
    	$room 	= Room::All();
    	$guest 	= Guest::All();
    	$data 	= array(
    		'title' => 'Tambah Registrasi',
    		'room'	=> $room,
    		'guest'	=> $guest
    	);
    	return view('registrations.create',$data);
    }
     public function store()
    {
     Registration::create([
         'room_id'      => request('room_id'),
         'guest_id'    	=> request('guest_id'),
         'day'    		=> request('day')
     ]);
     return redirect('/registrations');
    }
}
