<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('create');
});

Route::put('/create-task', [TaskController::class, 'store']);

Route::get('/tasks', [TaskController::class, 'show']);
