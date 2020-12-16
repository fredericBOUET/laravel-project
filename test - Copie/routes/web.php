<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiereController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminBiereController;
use App\Http\Controllers\FavoriteController;
use App\Models\Biere;
use App\Models\User;
use App\Http\Middleware\CheckPermissionAdmin;
use App\Http\Middleware\CheckPermissionUser;

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



Route::get('/', [BiereController::class, 'index']);

Route::get('index', [BiereController::class, 'index']);


// appel de methode du controller biere (besoin de use app bierecontroller)
// Route::get('/biere/{id}',[BiereController::class, 'index']);


 Route::get('biere/{id}', [BiereController::class, 'show']);

//CRUD Application

Route::resource('/biere', BiereController::class);

Route::resource('/login', LoginController::class);
Route::get("/logout", [LoginController::class, 'logout']);
Route::get("/register", [LoginController::class, 'register']);
Route::post("/registerUser", [LoginController::class, 'registerUser']);


Route::resource('/admin', AdminBiereController::class)->middleware(CheckPermissionAdmin::class);;
Route::get('admin/{id}/destroy', [AdminBiereController::class, 'destroy'])->middleware(CheckPermissionAdmin::class);;
Route::get('admin/{id}/deleteUser', [AdminBiereController::class, 'deleteUser'])->middleware(CheckPermissionAdmin::class);;
Route::get('corbeille', [AdminBiereController::class, 'corbeille'])->middleware(CheckPermissionAdmin::class);;
Route::post('cleanDeleted', [AdminBiereController::class, 'cleanDeleted'])->middleware(CheckPermissionAdmin::class);;

 Route::post('biere/fav/{id}',[FavoriteController::class, 'testAjax'])->middleware(CheckPermissionUser::class);;
Route::get('/favoris',[FavoriteController::class, 'showFavorites'])->middleware(CheckPermissionUser::class);;
