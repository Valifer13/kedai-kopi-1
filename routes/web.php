<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $menu = json_decode(file_get_contents(storage_path('data/data.json')), true);
    return view('pages.home', ['menu' => $menu]);
})->name('home');

Route::get('/about', function() {
    return view('pages.about');
})->name('about');

Route::get('/menu', function() {
    $menu = json_decode(file_get_contents(storage_path('data/data.json')), true);
    return view('pages.menu', ['menu' => $menu]);
})->name('menu');

Route::get('/reservation', function() {
    $menu = json_decode(file_get_contents(storage_path('data/data.json')), true);
    return view('pages.reservation', ['menu' => $menu]);
})->name('reservation');

Route::get('/blog', function() {
    $data = json_decode(file_get_contents(storage_path('data/data.json')), true);
    return view('pages.blog', ['articles' => $data['articles']]);
})->name('blog');

Route::get('/contact', function() {
    return view('pages.contact');
})->name('contact');
