<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\Post\AdminController;


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


Route::group(['namespace' => 'App\Http\Controllers\Post'], function()
{
    
    Route::get('/posts', IndexController::class)->name('index.indexPost');
    Route::get('/posts/create', CreateController::class)->name('create.indexCreate');
    Route::post('/store', StoreController::class)->name('store');
    Route::get('/post/{post}', ShowController::class)->name('show');
    
    
    Route::get('/post/{post}/edit', EditController::class)->name('edit.indexEdit');
    Route::patch('/post/{post}', UpdateController::class)->name('update');
    Route::delete('/post/{post}', DestroyController::class)->name('destroy');
    Route::get('/', HomeController::class)->name('home.indexHome');
    
      

});


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' =>'admin'], function()
{
    Route::group(['namespace' => 'Post'], function()
    {
      Route::get('/post', AdminController::class)->name('admin.post.index');
    });
  });

//Route::get('/', [PostController::class, 'indexHome'])->name('home.indexHome');

//Route::get('/about', [PostController::class, 'indexAbout'])->name('about.indexAbout');

  /*  
Route::get('/test', [PostController::class, 'test']);

Route::get('/test/all', [PostController::class, 'all']);

Route::get('/test/create', [PostController::class, 'create']);

Route::get('/test/updateTest', [PostController::class, 'updateTest']);

Route::get('/test/delete', [PostController::class, 'delete']);

Route::get('/test/restore', [PostController::class, 'restore']);

Route::get('/test/first_or_create', [PostController::class, 'firstOrCreate']);

Route::get('/test/update_or_create', [PostController::class, 'updateOrCreate']);

Route::get('/connections', [PostController::class, 'connections'])->name('connections');


/*

//CRUD////////////////////////
Route::get('/', [PostController::class, 'indexDom'])->name('dom.indexDom');
Route::get('/posts', [PostController::class, 'indexPost'])->name('index.indexPost');
Route::get('/posts/create', [PostController::class, 'indexCreate'])->name('create.indexCreate');
Route::post('/store', [PostController::class, 'Store'])->name('store');
Route::get('/post/{post}', [PostController::class, 'show'])->name('show');


Route::get('/post/{post}/edit', [PostController::class, 'editIndex'])->name('edit.editIndex');
Route::patch('/post/{post}', [PostController::class, 'update'])->name('update');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('destroy');

Route::get('/about', [PostController::class, 'indexAbout'])->name('about.indexAbout');
//Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');

*/