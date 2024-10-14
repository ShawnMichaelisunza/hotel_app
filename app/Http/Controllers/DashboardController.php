<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // dashboard
    public function index(){

        $rooms = Room::get();
        return view('dashboard', ['rooms' => $rooms]);
    }
    // about page
    public function about(){

        return view('users.pages.about');
    }

    // room page
    public function rooms(){

        $rooms = Room::get();
        return view('users.pages.rooms', ['rooms' => $rooms]);
    }

    // book for guest
    public function book(Room $room){

        return view('users.pages.book', ['room' => $room]);
    }

    // amenities page
    public function amenities(){

        return view('users.pages.amenities');
    }

    // contact page
    public function contact(){

        return view('users.pages.contact');
    }
}
