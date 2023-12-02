<?php

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

Route::middleware('signed')
    ->get('invitation/{invitation}/accept', \App\Livewire\AcceptInvitation::class)
    ->name('invitation.accept');

Route::middleware('signed')
    ->get('quotes/{quote}/pdf', \App\Http\Controllers\QuotePdfController::class)
    ->name('quotes.pdf');
