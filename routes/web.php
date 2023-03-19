<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/',[StudentController::class, 'index']);

Route::get('/show/{id}', [StudentController::class, 'show']);

Route::get('/filter', [StudentController::class, 'filter']);
// Route::get('/greeting', function () {
//     return 'Hello World!';
// })->name('greeting');

// Route::get('/greeting/{name}', function ($name) {
//     return view('example', ['name' => $name]);
// })->name('greeting_with_name');

