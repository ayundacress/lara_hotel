<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class guestController extends Controller
{
    public function index(){
        $guests = Guest::All();
        $data = array(
            'title'     => 'ayunda HOTEL',
            'guests'  => $guests,
            'no'        => 1
        );
        return view('guests.index',$data);
    }
    public function create(){
        $data = array('title'   => 'ayunda HOTEL');
        return view('guests.create',$data);
    }
    public function store(){
        Guest::create([
            'name'      => request('name')
        ]);
        return redirect('/guests');
    }
    public function edit(Guest $guests){
        $data = array(
            'title'   => 'edit data',
            'guests' => $guests
        );
        return view('guests.edit',$data);
    }
    public function update(Guest $guests)
    {   
        $guests->update([
            'name'      => request('name')
        ]);
        return redirect('/guests');
    }
    public function destroy(Guest $guests){
        $guests->delete();
        return redirect()->route('guests.index');
    }
}
