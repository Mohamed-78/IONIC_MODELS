<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class, 'welcome'])->name("welcome");
Route::get('/contact', [WebsiteController::class, 'contacts'])->name("contact");
Route::get('/details', [WebsiteController::class, 'details'])->name("detailsPage");
Route::get('/home', [WebsiteController::class, 'home'])->name("home");
