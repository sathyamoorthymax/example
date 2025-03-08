<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/view-users',function() {
    return view('viewUser');
});
Route::get('/student', function () {
    return view('student');
});

Route::get('/view-student', function () {
    return view('viewStudent');
});


Route::post('/add-contact',[ContactController::class,'store'])->name('store-contact');
Route::get('/view-users',[ContactController::class,'show'])->name('view-userprofile');
Route::post('/add-student',[StudentController::class,'store'])->name('store-student');
Route::get('/view-student',[StudentController::class,'show'])->name('view-student');
Route::get('/edit-student',[StudentController::class,'edit'])->name('edit-student');
Route::get('/delete-student/{id}',[StudentController::class,'destroy'])->name('delete-student');

