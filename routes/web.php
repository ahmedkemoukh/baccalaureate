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

Route::get('/', function () {
    return  redirect('/home');
});

/*Route::get("/log",function(){
return view('auth.register');
}
)->middleware('guest','guest:controller');

*/





Route::get("/index",'PostsController@home')->name('post.home');
Route::resource("/exercice","ControllerComment");
Route::resource("post","PostsController");
Route::post("admin/login","loginAdminController@login")->name('admin.login');
Route::resource("news","ControllerLink");

Route::Auth();



Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/uploadFile', 'uploadFileController');
Route::resource('/comment', 'commentController');
Route::resource('{pronch}/{matier}/exercice', 'exerciceController');
Route::resource('{pronch}/{matier}/bac', 'bacController');

Route::get('{pronch}/{matier}/{exercice}/delete/{id}','exerciceController@delete')->name('delete');
Route::POST('{pronch}/{matier}/{exercice}/update/{id}','exerciceController@update');

Route::POST('/serch','uploadFileController@serch')->name('uploadFile.serch');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
