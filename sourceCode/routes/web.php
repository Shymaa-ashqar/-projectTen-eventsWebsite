<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/explore', function () {
    return view('explore');
});
Route::get('/bookinglist', function () {
    $categories=Category::all();
    return view('bookingList',compact("categories"));
});

Auth::routes();
Route::resource('/admin/user',UserController::class);
Route::resource('/admin/event',EventController::class);
Route::resource('/admin/categories',CategoryController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
