<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view('admin.AdminDashboard');
    }

    public function room(){

        $rooms = Room::get();

        return view('admin.pages.room_page', ['rooms' => $rooms]);
    }



    // public function book(Room $room){
    public function book($id){

        // Encrypted yung $id galing sa blade form mo or a link need i decrypt muna para magamit as plain text
        $decryptedId = decrypt($id);

        $room = Room::find($decryptedId);

        $books = $room->bookings()->orderBy('created_at','DESC');

        if(request()->has('search')){
            $books = $books->where('first_name', 'like', '%'. request()->get('search'). '%');
        }

        return view('admin.pages.book_page', [
            'books' => $books->paginate(5),
            'room' => $room
        ]);
    }

    public function viewBook($id){

        $book = Booking::findOrFail($id);

        return view('admin.modals.book_view', ['book' => $book]);
    }
}
