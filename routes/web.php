<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;



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

Route::get('/qwe', [PagesController::class, 'BX']);


Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/posts', [PostController::class,'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

//Route::get('/posts/{posts}', [PostController::class,'show'])->name('posts.show');
//Route::get('/posts/{posts}/edit', [PostController::class,'edit'])->name('posts.edit');
//Route::patch('/posts/{posts}', [PostController::class,'update'])->name('posts.update');
//Route::delete('/posts/{posts}', [PostController::class,'destroy'])->name('posts.delete');

// работа с Database
Route::resource('posts', PostController::class);


Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('/Post/update', [PostController::class, 'update']);
Route::get('/Post/delete', [PostController::class, 'delete']);
Route::get('/Post/Firs_Or_Create', [PostController::class, 'FirstOrCreate']);
Route::get('/Post/Update_Or_Create', [PostController::class, 'UpdateOrCreate']);


// админская панель
Route::group(['namespase' => 'admin', 'prefix' => 'admin'], function () {
    Route::group(['namespase' => 'post'], function () {

        Route::get('/post', [App\Http\Controllers\Admin\Post\IndexController::class, 'index'])->name('admin.post.index');
    });
});


Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
