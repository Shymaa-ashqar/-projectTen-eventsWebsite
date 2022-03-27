<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Event;

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
    $events=Event::all();
    return view('index',compact("events"));
});
Route::get('/explore', function () {
    return view('explore');
});
Route::get('/events/{event}', [EventController::class, 'show']);
Route::post('/events/{event}', [EventController::class, 'book'])->name('book');

Route::get('/bookinglist', function () {
    $categories=Category::all();
    $events=Event::all();
    return view('bookingList',compact("categories"),compact("events"));
});
Route::get('/search', [EventController::class, 'search'])->name('search');
Route::get('/category/{cat}', [EventController::class, 'categorySort'])->name('category');

Route::get('/userProfile', [UserController::class, 'userProfile'])->name('userProfile');
Route::put('/userProfile/{user}', [UserController::class, 'updateUserProfile'])->name('user.updateUserProfile');

Auth::routes();
Route::resource('/admin/user',UserController::class);
Route::resource('/admin/event',EventController::class);
Route::resource('/admin/categories',CategoryController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
