<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will\
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return 'web php';
});

Route::get('/posts', [PostController::class,'index'])->name('post.index');
Route::get('/posts/{post}', [PostController::class,'show'])->name('post.show');
Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('post.edit');
Route::patch('/posts/{post}', [PostController::class,'update'])->name('post.update');
Route::delete('/posts/{post}', [PostController::class,'destroy'])->name('post.delete');


Route::get('/post/create',  [PostController::class,'create'])->name('post.create');
Route::post('/post/store',  [PostController::class,'store'])->name('post.store');


Route::get('/post/update',  [PostController::class,'update']);
Route::get('/post/delete',  [PostController::class,'delete']);
Route::get('/post/Firs_Or_Create',  [PostController::class,'FirstOrCreate']);
Route::get('/post/Update_Or_Create',  [PostController::class,'UpdateOrCreate']);


Route::get('/main',  [MainController::class,'index'])->name('main.index');
Route::get('/contacts',  [ContactController::class,'index'])->name('contact.index');
Route::get('/about',  [AboutController::class,'index'])->name('about.index');
