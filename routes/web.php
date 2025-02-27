<?php

use App\Events\PusherEvent;
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
Route::get('/pusher', function () {
    return view('pusher');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pusher-event', function () {
    // print("/pusher-event");
    event(new PusherEvent('hello world'));
    // print("sent e1");

    PusherEvent::dispatch("Hi there, hello");
    // print("sent e2");

    return "Event sent";
});


Route::post('/broadcasting/auth', function () {
    return Auth::user();
});
