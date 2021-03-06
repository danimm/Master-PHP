<?php

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

// use App\Image;

// Route::get('/', function () {

// $images = Image::all();
// foreach ($images as $image) {
//     echo $image->image_path . "<br>";
//     echo $image->description . "<br>";
//     echo "Autor: " . $image->user->name . "<br>";
//     echo "Likes: " . count($image->likes) . "<br>";
//     if (count($image->comments) >= 1) {
//         echo "<h4>Comentarios: " . count($image->comments) . "</h4>";
//         foreach ($image->comments as $comment) {
//             echo $comment->user->name . " " . $comment->user->surname . ': ' . $comment->content . "<br>";
//         }
//     } else {
//         echo "No existen Comentarios..<br>";
//     }

//     echo "<hr>";
// }
// die();
// return view('welcome');
// });

// Rutas generales
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

// User Controller
Route::get('/configuración', 'UserController@config')->name('config');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::get('/profile/{id}', 'UserController@profile')->name('profile');
Route::get('/people/{search?}', 'UserController@index')->name('user.index');

// Images Controller
Route::get('/subir-imagen', 'ImageController@create')->name('image.create');
Route::post('/image/save', 'ImageController@save')->name('image.save');
Route::get('/image/file/{filename}', 'ImageController@getImage')->name('image.file');
Route::get('/image/{id}', 'ImageController@detail')->name('image.detail');
Route::get('/image/delete/{id}', 'ImageController@delete')->name('image.delete');
Route::get('/image/edit/{id}', 'ImageController@edit')->name('image.edit');
Route::post('image/update', 'ImageController@update')->name('image.update');

// Comments Controller
Route::post('/comment/save', 'CommentController@save')->name('comment.save');
Route::get('/comment/delete/{id}', 'CommentController@delete')->name('comment.delete');

// Like Controller
Route::get('/like/{image_id}', 'LikeController@like')->name('like.save');
Route::get('/dislike/{image_id}', 'LikeController@dislike')->name('dislike.save');
Route::get('/likes', 'LikeController@index')->name('likes');
