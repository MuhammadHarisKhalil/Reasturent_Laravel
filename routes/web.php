<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
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


Route::get('/', [HomeController::class, "index"]);

Route::get('/redirect', [HomeController::class, "redirect"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::group(['middleware' => ['admin']], function () {
Route::get('/users', [AdminController::class, "Users"]);

Route::delete('/user/{user}/delete', [AdminController::class, 'UsersDelete']);

Route::get('/food', [AdminController::class, "FoodMenu"]);

Route::post('/createfood', [AdminController::class, "UploadFood"]);

Route::get('/food/{food}/edit', [AdminController::class, "FoodEdit"]);

Route::delete('/food/{food}/delete', [AdminController::class, 'FoodDelete']);


Route::post('/update/{food}', [AdminController::class, "FoodUpdate"]);

Route::post('/reservation', [AdminController::class, "Reserve"]);

Route::get('/viewreservation', [AdminController::class, "ViewReserve"]);

Route::get('/chiefs', [AdminController::class, "ViewChiefs"]);

Route::post('/create/chiefs',[AdminController::class, "UploadChiefs"]);
});
