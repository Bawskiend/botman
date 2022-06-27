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
use BotMan\BotMan\BotMan;
use App\Http\Controllers\BotManController as BotManController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['post', 'get'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');
?>