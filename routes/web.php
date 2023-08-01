<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PhotoController;
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
//Route::get('/posts', [PhotoController::class,'index'])->name('posts.index');
Route::get('/posts/create',  [PhotoController::class,'create'])->name('posts.create');

//Route::get('/posts/{posts}', [PhotoController::class,'show'])->name('posts.show');
//Route::get('/posts/{posts}/edit', [PhotoController::class,'edit'])->name('posts.edit');
//Route::patch('/posts/{posts}', [PhotoController::class,'update'])->name('posts.update');
//Route::delete('/posts/{posts}', [PhotoController::class,'destroy'])->name('posts.delete');



Route::resource('posts', PhotoController::class);



Route::post('/posts/store',  [PhotoController::class,'store'])->name('posts.store');

Route::get('/Post/update',  [PhotoController::class,'update']);
Route::get('/Post/delete',  [PhotoController::class,'delete']);
Route::get('/Post/Firs_Or_Create',  [PhotoController::class,'FirstOrCreate']);
Route::get('/Post/Update_Or_Create',  [PhotoController::class,'UpdateOrCreate']);


Route::get('/main',  [MainController::class,'index'])->name('main.index');
Route::get('/contacts',  [ContactController::class,'index'])->name('contact.index');
Route::get('/about',  [AboutController::class,'index'])->name('about.index');


