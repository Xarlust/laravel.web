<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/2/', function () {
    return view('add_product');
    //return view('welcome');
});
Route::get('/1/', function () {
    return view('adminpanel');
    //return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    $groupData=[
      'namespace'=>'Blog\Admin',
      'prefix'=>'admin',
    ];

    Route::group($groupData, function (){
       Route::resource('index','MainController')->names('blog.admin.index') ;
    });
});
