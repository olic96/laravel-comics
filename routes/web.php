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
    $comics = config('comics');
    $links = config('links');
    $shopLinks = config('shoplinks');
    $footerLinks = config('footerlinks');
    $socials = config('socials');

    return view('home', compact('comics', 'links', 'shopLinks', 'footerLinks', 'socials'));
})->name('home');

