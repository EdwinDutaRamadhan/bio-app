<?php

use App\Models\Mywork;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyworkController;
use App\Models\Category;
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
    return view('home',[
        'title' => 'Home'
    ]);
});
Route::get('/home', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});
Route::get('/about', function(){
    return view('about',[
        'title' => 'About'
    ]);
});
Route::get('/contact', function(){
    return view('contact',[
        'title' => 'Contact Us'
    ]);
});

Route::get('/myworks', [MyworkController::class, 'index']);
Route::get('/mywork/{mywork:slug}',[MyworkController::class, 'detail']);

Route::get('/categories/{category:slug}',function(Category $category){
    return view('category', [
        'title' => $category->name,
        'project' => $category->myworks,
        'category'=> $category->name
    ]);
});

Route::get('/categories',function(){
    return view('/categories', [
        'title' => 'My Work Categories',
        'categories' => Category::all()
    ]);
});