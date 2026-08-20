<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;




Route::get('/', WelcomeController::class);
    
Route::get('/contact/',[ContactController::class,'index'])->name('contacts.index');

Route::get('/contacts/create',[ContactController::class,'create'])->name('contacts.create');

Route::get('/contacts/{id}', [ContactController::class,'show'])->name('contacts.show');



Route::fallback(function(){
    return '<h1>Sorry, the page does not exist</h1>';
});