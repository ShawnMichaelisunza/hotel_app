<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create(){

    return  view('admin.modals.room_form');
    }

    public function store(){

        $val = request()->validate([
            'room_img' => ['required', 'mimes:png,jpg,jpeg'],
            'room_name' => ['required'],
            'capacity' => ['required'],
            'price' => ['required'],
            'description' => ['required']
        ]);

        if(request()->has('room_img')){
            $files = request()->file('room_img');
            $extension = $files->getClientOriginalExtension();
            $path = 'rooms/';
            $filename = time(). '.' . $extension;
            $files->move($path, $filename);
        }

        $val['room_img'] = $path.$filename;

        Room::create($val);

        return redirect()->route('admin.room')->with('success', 'Created Room Successfully !');

    }
}
