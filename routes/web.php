<?php

use App\Http\Controllers\UserController;
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

//For server reboot start
Route::get('reboot', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    file_put_contents(storage_path('logs/laravel.log'),'');
    Artisan::call('key:generate');
    Artisan::call('config:cache');
    return '<center><h1>System Rebooted!</h1></center>';
});

//End

Route::get('/', [UserController::class, 'HomePage'])->name('home_page');
Route::get('step2', [UserController::class, 'secondstepview'])->name('second_step_view');
Route::get('step3', [UserController::class, 'thirdStep'])->name('third_step_view');
Route::get('step4', [UserController::class, 'finalStepView'])->name('final_step_view');

Route::get('/user/{id}', [UserController::class, 'show']);

Route::post('step1/submit', [UserController::class, 'NextOne'])->name('submit_first_step');
Route::post('step2/submit', [UserController::class, 'NextTow'])->name('submit_second_step');
Route::post('step3/submit', [UserController::class, 'NextThree'])->name('submit_third_step');
Route::post('step4/save', [UserController::class, 'FinalStep'])->name('signpad.save');

