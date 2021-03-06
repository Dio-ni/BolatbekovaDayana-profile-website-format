<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Http\Controllers\BlogController;
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
Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/my_works', function () {
    return view('MY_WORKS');
});

Route::get('/​post/create', function () {
    DB::table('post')->insert([
        'title'=>'Title',
        'body'=>'Body part'

    ]);
});
Route::get('/​post', function () {
    $post = Post::find(1);
    return $post;
});

//Controllers

Route::get('blog', [BlogController::class,'index']);

Route::get('blog/create', function(){
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-blog');

//Test

Route::get('post/{id}', [BlogController::class, 'get_post']);

