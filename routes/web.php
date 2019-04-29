<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//
// Allow Vue to direct view routing
//
// ** Note: GET and POST routes for database
//    located in routes/api.php
//

Route::get('/{any?}', function () {
    return view('app');
})->where('any', '.*');
