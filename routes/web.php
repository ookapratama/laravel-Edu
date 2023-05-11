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

use App\Http\Controllers\UserController;
use App\Http\Controllers\elo\AdminController;
use App\Http\Controllers\elo\MhsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', [UserController::class, 'login'])->name('login');


Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\elo', 'middleware' => 'validasi'], function () {
    
    Route::get('/', [AdminController::class, 'admin'])->name('admin');
    
    Route::group(['prefix' => 'mahasiswa'], function () {
        Route::get('/', [MhsController::class, 'index'])->name('index.mahasiswa');
        Route::get('/cari', [MhsController::class, 'cari'])->name('cari.mahasiswa');
        Route::get('/add', [MhsController::class, 'add'])->name('add.mahasiswa');
        Route::post('/store', [MhsController::class, 'store'])->name('store.mahasiswa');
        Route::get('/edit/{id}', [MhsController::class, 'edit'])->name('edit.mahasiswa');
        Route::put('/update', [MhsController::class, 'update'])->name('update.mahasiswa');
        Route::delete('/destroy/{id}', [MhsController::class, 'destroy'])->name('destroy.mahasiswa');
    });
});


Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\elo\Auth'], function () {
    
    Route::get('/login', 'LoginController@login')->name('login');
    Route::post('/login', 'LoginController@cek_login')->name('cek_login');
    Route::get('/register', 'LoginController@register')->name('register');
    Route::post('/register', 'LoginController@store')->name('store');
    Route::get('/reset_password', 'LoginController@reset_password')->name('reset_password');
    Route::put('/reset_password', 'LoginController@reset')->name('reset');
    Route::get('/logout', 'LoginController@logout')->name('logout');
    
    
});
