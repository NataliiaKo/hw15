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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('blog.index');

Route::get('/about-us', function () {
    return view('about-us');
})->name('blog.about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog.blog');


Route::get('/contact', function () {
    return view('contact');
})->name('blog.contact');

Route::get('/post', function () {
    return view('post');
})->name('blog.post');

Route::get('/test', function () {
    $result=factory(App\Category::class,50)->create();
    dd($result);
})->name('blog.post');
