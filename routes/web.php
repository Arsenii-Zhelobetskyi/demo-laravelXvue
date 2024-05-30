<?php
;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home']);
Route::get('/about', [MainController::class, 'about']);

Route::post('/api/addItemApi', [MainController::class, 'addItemApi']);
Route::get('/addItem', [MainController::class, 'addItem']);

Route::get('/flow',[MainController::class, 'flow']);