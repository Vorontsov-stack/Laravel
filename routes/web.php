<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\HomeController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Admin\Post\AdminController;
use App\Http\Controllers\Admin\Post\AdminBaseController;
use App\Http\Controllers\Admin\Post\AdminEditController;
use App\Http\Controllers\Admin\Post\AdminShowController;
use App\Http\Controllers\Admin\Post\AdminStoreController;
use App\Http\Controllers\Admin\Post\AdminCreateController;
use App\Http\Controllers\Admin\Post\AdminDeleteController;
use App\Http\Controllers\Admin\Post\AdminUpdateController;
use App\Http\Controllers\Admin\Post\AdminUpdBaseController;








/*
Route::get('/', HomeController::class)->name('HomeTask');
Route::get('/tasks', TaskController::class)->name('allTaskView');
//Route::get('/posts/create', CreateController::class)->name('create.indexCreate');


Route::get('/task/{task}', ShowTaskController::class)->name('showTask');


Route::get('/task/{task}/edit', EditTaskController::class)->name('editTask');
Route::patch('/task/{task}', UpdateTaskController::class)->name('updateTask');
Route::delete('/post/{post}', DestroyTaskController::class)->name('destroyTask');
*/


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


/***************************НЕ ЗАКОНЧЕНО КУРС Laravel**************************/

Auth::routes();



Route::get('/home', [LoginController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Post'], function()
{
    Route::get('/', HomeController::class)->name('index');
    Route::get('/posts', IndexController::class)->name('index.indexPost');
    //Route::get('/posts/create', CreateController::class)->name('createPost');
    //Route::post('/store', StoreController::class)->name('store');
    //Route::get('/post/{post}', ShowController::class)->name('show');
    
    
    //Route::get('/post/{post}/edit', EditController::class)->name('edit.indexEdit');
    //Route::patch('/posts/{post}', UpdateController::class)->name('update');
    //Route::delete('/posts/{post}', DestroyController::class)->name('destroy');
    //Route::get('/login', HomeController::class)->name('register');
    
});


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' =>'admin', 'middleware' => 'admin'], function()
{
  Route::group(['namespace' => 'Post'], function()
    {
      Route::get('/', AdminController::class)->name('AdminIndex');
      Route::get('/base', AdminBaseController::class)->name('base');
      Route::get('/UpdBase', AdminUpdBaseController::class)->name('updateBase');
      Route::get('/create', AdminCreateController::class)->name('createAdmin');
      Route::post('/store', AdminStoreController::class)->name('AdmStore');

      Route::get('/post/{post}', AdminShowController::class)->name('show');
      Route::get('/post/{post}/edit', AdminEditController::class)->name('edit');
      Route::delete('/posts/{post}', AdminDeleteController::class)->name('destroy');
      Route::patch('/posts/{post}', AdminUpdateController::class)->name('update');
      
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
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
