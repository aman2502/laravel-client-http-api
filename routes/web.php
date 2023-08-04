<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;

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

Route::get('/login-page', [LoginController::class,'loginPage']);
Route::post('/login', [LoginController::class,'login']);

Route::group(
    ['middleware' => ['web','CheckSession']],
    function () {
        Route::get('/reset-password', [LoginController::class,'resetPassword']);
        Route::post('/reset-password-link', [LoginController::class,'resetPasswordLink']);

    //author
    Route::get('/author-list', [AuthorController::class,'authorList']);

});

