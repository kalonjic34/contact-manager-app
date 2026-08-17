<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',function(){
    $html ="
    <h1>Contact Management App</h1>
    <div>
        <a href='" .route('contacts.index')."'>All contacts</a>
        <a href='".route('contacts.create')."'>Add contacts</a>
        <a href='".route('contacts.show',1)."'>Show contacts</a>
    </div>
    ";
    return  $html;
});

Route::get('/contact/',function(){
    return '<h1>All contacts</h1>';
})->name('contacts.index');


Route::get('/contacts/create',function(){
    return '<h1>Add new contacts</h1>';
})->name('contacts.create');

Route::get('/contacts/{id}',function($id){
    return 'Contact: '.$id;
})->name('contacts.show');


