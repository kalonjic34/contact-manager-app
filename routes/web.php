<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact/',function(){
    return view('contacts.index');
})->name('contacts.index');


Route::get('/contacts/create',function(){
    return '<h1>Add new contacts</h1>';
})->name('contacts.create');

Route::get('/contacts/{id}',function($id){
    return 'Contact: '.$id;
})->name('contacts.show');

Route::fallback(function(){
    return '<h1>Sorry, the page does not exist</h1>';
});