<?php

use Illuminate\Support\Facades\Route;



Route::view('/','pages.home')->name('home');
Route::view('/','pages.about')->name('about');

