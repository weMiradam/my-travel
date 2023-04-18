<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminTrainerController;
use App\Http\Controllers\Backend\AdminTransactionController;
use App\Http\Controllers\Backend\AdminTravelController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TrainerController;
use App\Http\Controllers\Frontend\TravelController;
use App\Http\Controllers\LoginController;
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
Route::get('', [HomeController::class, 'getIndex'])->name('homeIndex');
Route::get('about', [AboutController::class, 'getIndex'])->name('about');
Route::get('travel', [TravelController::class, 'getIndex'])->name('travel');
Route::get('travel/{id}', [TravelController::class, 'getDetail'])->name('travelDetail');
Route::post('create-order', [TravelController::class, 'postOrder'])->name('travelOrder');
Route::get('trainer', [TrainerController::class, 'getIndex'])->name('trainer');
Route::get('contact', [ContactController::class, 'getIndex'])->name('contact');

Route::prefix('admin')->group(function () {
    Route::get('login',[LoginController::class,"getIndex"])->name("login");
    Route::post('login',[LoginController::class,"postLogin"])->name("loginFunction");
    Route::get('logout',[LoginController::class,"getLogout"])->name("logoutFunction");
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin.login']], function(){
    Route::get('',[AdminController::class,"getIndex"])->name("admin");

    Route::prefix('transaction')->group(function () {
        Route::get('/', [AdminTransactionController::class, "getIndex"])->name("adminTransaction");
        Route::get('/delete/{id}', [AdminTransactionController::class, "getDelete"])->name("adminTransactionDelete");
    });

    // controller travel
    Route::prefix('travel')->group(function () {
        Route::get('/', [AdminTravelController::class, "getIndex"])->name("adminTravel");
        Route::get('/add', [AdminTravelController::class, "getAdd"])->name("adminTravelAdd");
        Route::get('/edit/{id}', [AdminTravelController::class, "getEdit"])->name("adminTravelEdit");
//        Route::get('/detail/{id}', [AdminTravelController::class, "getDetail"])->name("adminTravelDetail");
        Route::get('/delete/{id}', [AdminTravelController::class, "getDelete"])->name("adminTravelDelete");
        Route::post('save',[AdminTravelController::class, "postSave"])->name("adminTravelSave");
    });

    Route::prefix('trainer')->group(function () {
        Route::get('/', [AdminTrainerController::class, "getIndex"])->name("adminTrainer");
        Route::get('/add', [AdminTrainerController::class, "getAdd"])->name("adminTrainerAdd");
        Route::get('/detail/{id}', [AdminTrainerController::class, "getEdit"])->name("adminTrainerEdit");
//        Route::get('/edit/{id}', [AdminTrainerController::class, "getDetail"])->name("adminTrainerDetail");
        Route::get('/delete/{id}', [AdminTrainerController::class, "getDelete"])->name("adminTrainerDelete");
        Route::post('save',[AdminTrainerController::class, "postSave"])->name("adminTrainerSave");
    });
});
