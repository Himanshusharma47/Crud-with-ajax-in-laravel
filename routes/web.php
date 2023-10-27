<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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
    return view('form');
});
Route::get('/form',[CrudController::class,'index']);
Route::post('/form_submit',[CrudController::class,'form_submit']);
Route::post('/delete_record', [CrudController::class,'deleteRecord']);
Route::get('/get_record', [CrudController::class,'getRecord']);
Route::post('/update_record', [CrudController::class,'updateRecord']);