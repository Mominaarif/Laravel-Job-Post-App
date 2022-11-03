<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;

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





/* ----------------------------------------------------------------------------- */
/* ----------------------------------------------------------------------------- */


/* ------------------------- SHOW ALL LISTINGS ------------------------- */

Route::get('/', [ListingController::class, 'index']);


/* ------------------------- SHOW CREATE FORM ------------------------- */

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');


/* ------------------------- STORE LISTINGS DATA ------------------------- */

Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');


/* ------------------------- SHOW EDIT FORM ------------------------- */

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');


/* ------------------------- UPDATE LISTING ------------------------- */

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');


/* ------------------------- DELETE LISTING ------------------------- */

Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth');


/* ------------------------- MANAGE LISTINGS ------------------------- */

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');


/* ------------------------- SHOW SINGLE LISTING ------------------------- */

Route::get('/listings/{listing}', [ListingController::class, 'show']);


/* ----------------------------------------------------------------------------- */
/* ----------------------------------------------------------------------------- */


/* ------------------------- SHOW REGISTER/CREATE FORM ------------------------- */

Route::get('/register', [UserController::class, 'create'])->middleware('guest');


/* ------------------------- CREATE NEW USER ------------------------- */

Route::post('/users', [UserController::class, 'store']);


/* ------------------------- USER LOGOUT ------------------------- */

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


/* ------------------------- SHOW LOGIN FORM ------------------------- */

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');


/* ------------------------- LOG IN USER ------------------------- */
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
