<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users', 'UserController@index')->name('users');


/*
| Rutas de administración
 */

 Route::get('admin', 'Admin\HomeController@index')->name('HomeControllerAdmin');

 /* 
 |/////////////////////////
 |////Categorias
 |/////////////////////////
 */

 Route::get('getCategorias', 'Admin\CategoriesController@get')->name('getCategorias');

 Route::post('setCategoria', 'Admin\CategoriesController@post')->name('setCategoria');

 Route::post('upCategoria', 'Admin\CategoriesController@put')->name('upCategoria');

  /* 
 |/////////////////////////
 |////Post
 |/////////////////////////
 */

 Route::get('getPosts', 'Admin\PostsController@get')->name('getPosts');

 Route::post('setPost', 'Admin\PostsController@post')->name('setPost');

 Route::post('putPost', 'Admin\PostsController@put')->name('putPost');