<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
Route::get('/home', function () {
    return view('welcome', [
        "title" => "Welcome"
    ]);
});

Route::any('/', [LandingController::class, 'root']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);



//user
Route::group(['middleware' => ['auth', 'isAdmin:user,admin']], function(){
    Route::get('/dashboard', [LandingController::class, 'index']);
    Route::get('/diagnosa', [LandingController::class, 'diagnosa']);
    Route::get('/petunjuk', [LandingController::class, 'petunjuk']);
    Route::post('/hasildiagnosa', [LandingController::class, 'printcheckbox'])->name('hasildiagnosa');
    Route::get('/landing', function () {
        return view('landing', [
            "title" => "Landing"
        ]);
    });
});

//admin
Route::group(['middleware' => ['auth', 'isAdmin:admin']], function(){
    Route::get('/admin', [LandingController::class, 'adminboard']);
    Route::get('/delete/{id}', [LandingController::class, 'delete'])->name('delete');
    Route::get('/edit/{id}', [LandingController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [LandingController::class, 'update'])->name('update');
    Route::get('/viewuser', [LandingController::class, 'viewuser'])->name('viewuser');
});


