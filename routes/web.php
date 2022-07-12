<?php

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
    return view('welcome');
});

Route::get('/about', function () {
    return ('Abou Pageeeeeeeee');
});

Route::get('/pages', [\App\Http\Controllers\PageController::class, 'index']);
Route::get('/pages/{id}', [\App\Http\Controllers\PageController::class, 'show']);






// Route::get('/pages/{id}', function ($id) {
//     return "Page {$id}";
// });

// Route::get('/pages/{id?}', function ($id=1) {
//     return "Page {$id}";
// });
