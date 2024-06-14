<?php

use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('pusher', function () {
    return view('pusher');
});

Route::resource('user/post', PostController::class);

// Route::resource('post', PostController::class)->names([
//     'index'   => 'post.index',
//     'create'  => 'post.create',
//     'store'   => 'post.store',
//     'show'    => 'post.show',
//     'edit'    => 'post.edit',
//     'update'  => 'post.update',
//     'destroy' => 'post.destroy',
// ]);
