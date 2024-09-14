<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('partials.index');
});
Route::get('/register', function() {
    return view('partials.forms.register');
});