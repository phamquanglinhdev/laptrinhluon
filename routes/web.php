<?php

use App\Http\Controllers\Client\AuthClientController;
use App\Http\Controllers\Client\GradeController;
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
    return view('clients.index');
})->name("index");
//Route::get('/detail', function () {
//    return view('detail');
//})->name("detail");
Route::get('/courses/{slug?}', [GradeController::class, "showCourses", "slug"])->name("courses");
Route::get("/filter", [GradeController::class, "filterCourses"])->name("grade.filter");
Route::get('/login', [AuthClientController::class, "login"])->name("login");
Route::get('/logout', [AuthClientController::class, "logout"])->name("logout");
Route::post('/login', [AuthClientController::class, "checkLogin"])->name("checkLogin");
Route::get("/grade/{code}", [GradeController::class, "showByCode", "code"])->name("grade");
Route::get("/user/own", [GradeController::class, "Own"])->name("own");

