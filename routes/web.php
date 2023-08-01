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
//Route::get('/posts', [PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',  [PostController::class,'create'])->name('posts.create');

//Route::get('/posts/{posts}', [PostController::class,'show'])->name('posts.show');
//Route::get('/posts/{posts}/edit', [PostController::class,'edit'])->name('posts.edit');
//Route::patch('/posts/{posts}', [PostController::class,'update'])->name('posts.update');
//Route::delete('/posts/{posts}', [PostController::class,'destroy'])->name('posts.delete');



Route::resource('posts', PostController::class);



Route::post('/posts/store',  [PostController::class,'store'])->name('posts.store');

Route::get('/Post/update',  [PostController::class,'update']);
Route::get('/Post/delete',  [PostController::class,'delete']);
Route::get('/Post/Firs_Or_Create',  [PostController::class,'FirstOrCreate']);
Route::get('/Post/Update_Or_Create',  [PostController::class,'UpdateOrCreate']);


Route::get('/main',  [MainController::class,'index'])->name('main.index');
Route::get('/contacts',  [ContactController::class,'index'])->name('contact.index');
Route::get('/about',  [AboutController::class,'index'])->name('about.index');


