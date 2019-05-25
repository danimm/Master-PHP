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

use App\Image;

Route::get('/', function () {

    $images = Image::all();

    foreach ($images as $image) {
        echo $image->image_path . "<br>";
        echo $image->description . "<br>";
        echo "<hr>";
    }
    die();
    // return view('welcome');
});
