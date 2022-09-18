<?php

use App\Http\Controllers\Admin\CalendarController;
use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array)config('backpack.base.web_middleware', 'web'),
        (array)config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('category', 'CategoryCrudController');
    Route::crud('grade', 'GradeCrudController');
    Route::crud('tag', 'TagCrudController');
    Route::crud('user', 'UserCrudController');
    Route::get("/calendar", [CalendarController::class, "index"])->name("calendar");
//    Route::get("/calendar", [CalendarController::class, "index"])->name("calendar");
}); // this should be the absolute last line of this file
