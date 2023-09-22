<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

route::get('/',[HomeController::class,'index'])->name('home');
route::get('/about',[HomeController::class,'about'])->name('about');
route::get('/category',[HomeController::class,'category'])->name('category');
route::get('/contact',[HomeController::class,'contact'])->name('contact');
route::get('/single-post',[HomeController::class,'singlePost'])->name('single-post');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


