<?php

// use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Qessas
Route::get('/', 'App\Http\Controllers\BookController@index')->name('home');

Route::group(['prefix'=>'books'],function(){
    Route::resource("", 'App\Http\Controllers\BookController');

    Route::get('qesas',function(){
        return view('qesas', [
            'qesas'         => Book::where('category','قصص')->latest()->paginate(10),
            'page_name'     => 'ُقصص'
        ]);
    })->name('qesas',);
    Route::get('motasalselat',function(){
        return view('m', [
            'qesas'  => Book::where('category','متسلسلات')->latest()->paginate(10),
            'page_name'     => 'ُقصص'
        ]);
    })->name('motasalselat');
});

Auth::Routes();
