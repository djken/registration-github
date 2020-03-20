<?php

use Illuminate\Support\Facades\Route;

Route::resource('registrations', 'RegistrationsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
