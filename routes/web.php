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

Route::get('/login',[UserController::class, 'login'])->name('login');


Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\elo'], function(){
    
    Route::get('/',[AdminController::class, 'admin'])->name('admin');

    Route::group(['prefix' => 'mahasiswa'], function() {
        Route::get('/', [MhsController::class, 'index'])->name('index.mahasiswa');
        Route::get('/add', [MhsController::class, 'add'])->name('add.mahasiswa');

    });

});