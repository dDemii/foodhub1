<?php

use App\Http\Controllers\PlannerController;
use App\Http\Controllers\MenuController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/menu', function () {
    if (Auth::check() && Auth::user()->isAdmin()) {
        return view('menu');
    } else {
        return redirect('/home');
    }
})->middleware(['auth']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');
Route::get('/planner', [App\Http\Controllers\PlannerController::class, 'index'])->name('planner');
Route::get('/menu/add', [MenuController::class, 'create'])->name('add');
Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
Route::delete('/menu/delete/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');




