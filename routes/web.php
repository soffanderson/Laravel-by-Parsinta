<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::view('/', 'welcome'); 

Route::get('/profile', function () {
    $name = "Soffan";
    return view('profile', [
        'name' => $name
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
//Route::view('contact', 'contact');

Route::view('posts/first-post', 'posts.show');

Route::view('about', 'about');