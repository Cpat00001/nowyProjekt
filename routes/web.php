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

Route::view('/', 'mainpage')->name('mainpage');
// Route::view('/contacts', 'contacts');
// Route::get('user/{id}/{comment}', function ($id, $comment) {
//     return 'User ' . $id . ' left a comment: ' . $comment;
// });
// Route::get('user/{name?}', function ($name = 'default name') {
//     return $name;
// });
// Route::get('user/{name}', function ($name) {
//     //return $name;
// })->where('name', '[A-Ca-c]+');
// Route::get('user/profile', function () {
//     //
// })->name('profile');
// Route::get('/app', function () {
//     return view('child');
// });
Route::get('/lokalne/{id}', function ($id) {
    $kat = [
        1 => ['title' => 'Prawo jazdy kategoria CE'],
        2 => ['title' => 'Prawo jazdy motocykle A'],
        3 => ['title' => 'Prawo jazdy lawety BE']
    ];
    return view('allnews', ['data' => $kat[$id]]);
    // return view('allnews');
})->name('lokalne');
Route::view('/app', 'app');
// Route::view('/lokalne', 'allnews');
