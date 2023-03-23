<?php

use App\Http\Controllers\HomeController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::get('/',[StudentController::class, 'index'])->name('index');

Route::get('/show/{id}', [StudentController::class, 'show'])->name('show');

Route::get('/filter', [StudentController::class, 'filter']);

Route::get('/update_password', [HomeController::class, 'update_password'])->name('update_password');

Route::patch('/store_password', [HomeController::class, 'store_password'])->name('store_password');

Route::middleware(['admin'])->group(function(){
    Route::get('/create', [StudentController::class, 'create'])->name('create');

    Route::post('/create', [StudentController::class, 'store'])->name('store');

    Route::get('/edit/{student}',[StudentController::class, 'edit'])->name('edit');

    Route::patch('/update/{student}', [StudentController::class, 'update'])->name('update');

    Route::delete('/delete/{student}', [StudentController::class, 'delete'])->name('delete');
});
// Route::get('/greeting', function () {
//     return 'Hello World!';
// })->name('greeting');

// Route::get('/greeting/{name}', function ($name) {
//     return view('example', ['name' => $name]);
// })->name('greeting_with_name');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
