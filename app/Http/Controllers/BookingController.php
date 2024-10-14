<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ApproveMail;
use App\Mail\BookMail;
use App\Mail\RejectMail;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{

    // For Admin Create booking
    public function create($id){

    $room = Room::findOrFail($id);

        return view('admin.modals.book_form', ['room' => $room]);
    }

    public function store(Room $room, Request $request){

        $booking = new Booking();
        $booking->room_id = $room->id;
        $booking->branch_loc = $request->branch_loc;
        $booking->room_offer = $request->room_offer;
        $booking->add_offer = $request->add_offer;
        $booking->first_name = $request->first_name;
        $booking->last_name = $request->last_name;
        $booking->phone_no = $request->phone_no;
        $booking->email = $request->email;
        $check_in = $booking->check_in = Carbon::parse($request->check_in);
        $check_out = $booking->check_out = Carbon::parse($request->check_out);

        $booking->total_price = $request->room_offer + $request->add_offer + $room->price * ($check_out->diffInDays($check_in));

        $booking->save();

        if(request()->has('email')){
            Mail::to($booking->email)->send(new BookMail);
        }

        return redirect()->back()->with('success', 'Your booked Successfully !');

    }

    // edit book

    public function edit($id){
        $book = Booking::findOrFail($id);
        $rooms = Room::all();

        return view('admin.modals.book_edit', [
            'book' => $book,
            'rooms' => $rooms
        ]);
    }

    // public function update(Room $room, Request $request, $id) {
    public function update(Request $request, $id) {

        // gagana lang tong new Booking sa create kasi gagawa ka bagong mga data
        // $booking = new Booking();

        // Pass natin yung $id galing sa blade to route to controller
        $booking = Booking::find($id);
        $room = Room::find($booking->room_id);

        $check_in = $booking->check_in = Carbon::parse($request->check_in);
        $check_out = $booking->check_out = Carbon::parse($request->check_out);

        // same lang to ng nasa baba mas malinis lang try natin pag hindi gumana need lagyan fillables sa booking.php model
        $booking->fill([
            'branch_loc' => $request->branch_loc,
            'room_offer' => $request->room_offer,
            'add_offer' => $request->add_offer,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'total_price' => $request->room_offer + $request->add_offer + $room->price * ($check_out->diffInDays($check_in))
        ]);
        $booking->save();


        // $booking->branch_loc = $request->branch_loc;
        // $booking->room_offer = $request->room_offer;
        // $booking->add_offer = $request->add_offer;
        // $booking->first_name = $request->first_name;
        // $booking->last_name = $request->last_name;
        // $booking->phone_no = $request->phone_no;
        // $booking->email = $request->email;
        // $booking->total_price = $room->price * ($check_out->diffInDays($check_in));
        // $booking->save();

        // $booking->findOrFail($id)->update();

        return redirect()->back()->with('success', 'Updated Book Successfully !');
    }

    public function approve($id){
        $approve = Booking::find($id);

        $approve->status = 'APPROVE';

        $approve->save();

        if(request()->has('email')){
            Mail::to($approve->email)->send(new ApproveMail);
        }

        return redirect()->back()->with('success', 'Approved Book Successfully !');
    }

    public function reject($id){

        $approve = Booking::find($id);

        $approve->status = 'REJECT';
        $approve->save();

        if(request()->has('email')){
            Mail::to($approve->email)->send(new RejectMail);
        }

        return redirect()->back()->with('success', 'Rejected Book Successfully !');
    }

}
