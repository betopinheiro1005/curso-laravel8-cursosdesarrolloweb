<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(["middleware" => ['auth', 'verified']], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get("/contact", [ContactController::class, "index"])->name("contact.index");
    Route::post("/contact", [ContactController::class, "send"])->name("contact.send");

    Route::get('/mailable/contact', function(){
        return new \App\Mail\SendContactForm("Motivo", "Mensagem");
    });
});

require __DIR__.'/auth.php';
