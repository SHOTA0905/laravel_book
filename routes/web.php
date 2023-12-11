<?php

use Illuminate\Support\Facades\Route;

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
// 本の一覧表示
Route::get('/', function () {
    return view('welcome');
});

// 本の追加
Route::post('books', function(Request $request){
    //
});

// 本を削除
Route::post('/book/{book}', function(Book $book){
    //
});