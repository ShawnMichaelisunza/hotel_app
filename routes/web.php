<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// front page
Route::controller(DashboardController::class)->group(function(){

    Route::get('/dashboard', 'index')->name('page.index');
    Route::get('/about', 'about')->name('page.about');
    Route::get('/room', 'rooms')->name('page.rooms');
    Route::get('/amenities', 'amenities')->name('page.amenities');
    Route::get('/contact', 'contact')->name('page.contact');
    // book for guest
    Route::get('/create/book/{room}', 'book')->name('guest.book');
});


// Admin page
Route::controller(AdminController::class)->group(function(){
    // admin dashboard
    Route::get('/admin/dashboard', 'index')->name('admin.index');
    // room table
    Route::get('/admin/rooms', 'room')->name('admin.room');
    // booking table
    // Route::get('/admin/guests/{room}', 'book')->name('admin.booking');

    // Note na {id} is encrypted galing blade form mo
    Route::get('/admin/guests/{id}', 'book')->name('admin.booking');
    // book view
    Route::get('/admin/{id}/guests', 'viewBook')->name('admin.viewBook');
});

// Room controller
Route::controller(RoomController::class)->group(function(){
    Route::get('/admin/create/room', 'create')->name('room.create');
    Route::post('/admin/store/room', 'store')->name('room.store');
});

// Book controller
Route::controller(BookingController::class)->group(function(){
    // admin
    Route::get('/admin/create/book/{id}', 'create')->name('book.create');
    Route::post('/admin/store/book/{room}', 'store')->name('book.store');

    // edit book
    Route::get('/admin/{id}/book_edit', 'edit')->name('book.edit');
    // Route::put('/admin/{id}/book_update', 'update')->name('book.update');

    // Idulo ko yung id kasi later on kapag inencrypt natin yang id hahaba hindi mababasa yung "book_update"
    Route::put('/admin/book_update/{id}', 'update')->name('book.update');

    // approve book
    Route::post('/admin/{id}/approve', 'approve')->name('book.approve');
    // reject book
    Route::post('/admin/{id}/reject', 'reject')->name('book.reject');
});
