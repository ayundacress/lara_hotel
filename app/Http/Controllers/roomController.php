<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class roomController extends Controller
{
   public function index(){
        $rooms = Room::All();
        $data = array(
            'title'   	=> 'Ayunda HOTEL',
            'rooms' 	=> $rooms,
            'no'        => 1
        );
        return view('rooms.index',$data);
    }
    public function create(){
        $data = array('title'   => 'Ayunda HOTEL');
        return view('rooms.create',$data);
    }
    public function store(){
        Room::create([
            'type'      => request('type'),
            'price'     => request('price'),
        ]);
        return redirect('/rooms');
    }
    public function edit(Room $rooms){
        // $post = Post::find($id);
        // $categories = category::All();
        $data = array(
            'title'         => 'edit data',
            'rooms'          => $rooms
            // 'categories'    => $categories
        );
        return view('rooms.edit',$data);
    }
    public function update(Room $rooms)
    {   
        // $post = Post::find($id);
        $rooms->update([
           'type'      => request('type'),
           'price'     => request('price'),
        ]);
        // dd($room);
        return redirect('/rooms');
    }
    public function destroy(Room $rooms){
        $rooms->delete();
        return redirect()->route('rooms.index');
    }
}
