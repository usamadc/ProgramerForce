<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OkController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/secondpage', function () {
    return view('secondpage');

});

Route::get('users/{user}',[OkController::class,'loadview']);

// Route::get('/user/{name}',function ($name){
//     return view('users',["user"=>$name]);
// });