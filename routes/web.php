<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscripeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserrecipeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecipeController;
 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
}); 

Route::get('/search', function () {
    return view('user.search');
});
Route::get('/addingredients', function () {
    return view('user.addingredients');
});

Route::resource('/subscripe',SubscripeController::class);
Route::resource('/feedback',FeedbackController::class);
Route::resource('/userrecipe',UserrecipeController::class);
Route::resource('/user',UserController::class);
Route::resource('/recipe',RecipeController::class);
Route::post('/searchdata', [RecipeController::class,"searchdata"]);
Route::get('/showingredients', [RecipeController::class,"showingredients"]);
Route::get('/addtorecipe/{userrecipe}',[RecipeController::class,"addtorecipe"])->name("addtorecipe");














Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(auth()->user()->role =="user"){
            return redirect('/');

        }else{
            return view('admin.admindashbord');

        }
    })->name('dashboard');
});
