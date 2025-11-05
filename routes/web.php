<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});

// halo

Route::get('/emails', [EmailController::class, 'index'])->name('emails.index');;
Route::get('/emails/create', [EmailController::class, 'create'])->name('emails.create');
Route::post('/emails', [EmailController::class, 'store'])->name('emails.store');

// Mail sending route
Route::post('/send-email', [MailController::class, 'sendEmail'])->name('send.email');