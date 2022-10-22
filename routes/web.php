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

Route::get('/mywork', function(){
    $object = [
        [
            'title' => 'Project Pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laudantium delectus ut laborum. Voluptatem, maiores officiis iste, veniam cum temporibus accusamus dolore, cumque voluptates maxime recusandae quos sequi! Ipsam, est.'
        ],
        [
            'title' => 'Project Kedua',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut nulla, fugiat fugit accusantium ab laborum quasi temporibus magni aliquam at.'
        ]
    ];
    return view('mywork',[
        'title' => 'My Work',
        'project' => $object
    ]);
});
