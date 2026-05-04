<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout/welcome');
});

Route::get('/rpg', function() {
    return view('rpg');
});
