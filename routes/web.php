<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\DB;
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

Route::middleware(['auth'])->group(function () {
  Route::get('/', [DashboardController::class, "home"]);
  Route::get('/wp', [DashboardController::class, "rankWp"]);
  Route::get('/tambah-cakahima', [DashboardController::class, "tambahCakahima"]);
  Route::post('/tambah-cakahima', [DashboardController::class, "tambahCakahimaPost"]);
  Route::get("/logout", [DashboardController::class, "logout"]);
});

Route::get("/login", [DashboardController::class, "login"])->name("login")->middleware("guest");
Route::post("/login", [DashboardController::class, "loginPost"]);
