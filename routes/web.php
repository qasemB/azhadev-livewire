<?php

use App\Http\Livewire\About\About;
use App\Http\Livewire\Article\Article;
use App\Http\Livewire\Index\Index;
use App\Http\Livewire\Search\Search;
use Illuminate\Support\Facades\Auth;
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

Route::get('/' , Index::class);
Route::get('/article/{articleId}' , Article::class);
Route::get('/search/{categoryId}/{char?}' , Search::class);
Route::get('/about' , About::class);
Route::get('/logout' , function(){
    Auth::logout();
    return redirect('/');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
