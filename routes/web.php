<?php

use App\Http\Controllers\FindMatchController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboardImmo', function () {
    return view('dashboardImmo');
})->middleware(['auth'])->name('dashboardImmo');

Route::get('/buyer', function () {
    return view('buyer');
});

Route::get('/estate-agent', function () {
    return view('estate-agent');
});

// Route::get('buyer', [FindMatchController::class, 'create'])
//                 ->name('buyer');
Route::middleware('guest')->group(function () {
    Route::get('buyer', [FindMatchController::class, 'create'])
                ->name('buyer');

    Route::post('buyer', [FindMatchController::class, 'store']);
});


require __DIR__.'/auth.php';
