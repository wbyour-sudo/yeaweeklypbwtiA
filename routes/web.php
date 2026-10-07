<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile',
        'name' => 'Yanuar Eka',
        'nim' => '13242520002',
        'prodi' => 'Teknologi Informasi',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        'title' => 'Berita',
    ]);
});