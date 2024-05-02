<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\LoopingController;
use Illuminate\Support\Facades\Route;

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




Route::get('/', [CobaController::class,'index'])->name('/');


// LOOPING ROUTE
Route::get('/looping' , [LoopingController::class,'index']);


//  CONTOH ROUTING

// GET
// Route::get('/home',function() {
//     return view('coba',['coba' => 'ini adalah routing get']);
// });

//POST
// biasanya untuk mengirim data atau request ke dalam model atau controller
// Route::post('/post',[CobaController::class,'percobaan']);

//PUT
// biasanya untuk mengedit data yang sudah ada di dalam database
// Route::put('/put',[CobaController::class,'percobaan']);

//DELETE
// biasanya untuk menghapus data di dalam database
// Route::delete('/delete',[CobaController::class,'percobaan']);

//PATCH
// biasanya bisa menggunakan untuk update / create data
// Route::patch('/patch',[CobaController::class,'percobaan']);

//GROUP
// untuk menambah nama route di depannya 
// Route::prefix('admin')->group(function() {
//     Route::get('/prefix',[CobaController::class,'percobaan']);
// });

//GROUP
// Route::prefix('group')->group(function() {
//     Route::get('/ini-group',[CobaController::class,'percobaan']);
// });

//MIDDLEWARE
// Route::get('/dashboard', function() {
//     return view('coba');
// })->middleware('auth');


//RESOURCE
// Route::resource('/post',CobaController::class);


