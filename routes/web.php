<?php

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

/*
Route::get('/', 'pagescontroller@homepage');

Route::get('about', function () {
    return view('pages.about');
});

Route::get('siswa', function() {
    $siswa = ['Andi',
              'Budi',
              'Cindi',
              'Dendi'
            ];
    return view('siswa.index', ['siswa' => $siswa]);
});
*/

Route::get('/', 'homecontroller@login');

//page
Route::get('home', 'pagescontroller@homepage');
Route::get('about', 'pagescontroller@about');

//siswa
Route::get('siswa', 'siswacontroller@siswa');
Route::get('register', 'registercontroller@register');
Route::get('siswa/siswa_pdf', 'siswacontroller@siswa_pdf');
Route::get('siswa/create', 'siswacontroller@create');
Route::post('siswa/store', 'siswacontroller@store');
Route::get('siswa/{siswa}', 'siswacontroller@show');
Route::get('siswa/{siswa}/edit', 'siswacontroller@edit');
Route::post('siswa/{siswa}/update', 'siswacontroller@update');
Route::get('siswa/{siswa}/delete', 'siswacontroller@delete');
Route::get('form',function(){
    return view('pages.formview');
Route::get('/', 'kontak@index');
Route::get('/siswa/{id}/profile', 'siswacontroller@profile');
});

//laporanpdf
//Route::get('/siswa', 'siswacontroller@index');


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
//guru
Route::get('guru', 'gurucontroller@guru');
Route::get('guru/create', 'gurucontroller@create');
Route::post('guru/store', 'gurucontroller@store');
Route::get('guru/{guru}', 'gurucontroller@show');
Route::get('guru/{guru}/edit', 'gurucontroller@edit');
Route::post('guru/{guru}/update', 'gurucontroller@update');
Route::get('guru/{guru}/delete', 'gurucontroller@delete');


//kelas
Route::get('kelas', 'kelascontroller@kelas');
Route::get('kelas/create', 'kelascontroller@create');
Route::post('kelas', 'kelascontroller@store');
Route::get('kelas/{kelas}', 'kelascontroller@show');
Route::get('kelas/{kelas}/edit', 'kelascontroller@edit');
Route::post('kelas/{kelas}/update', 'kelascontroller@update');
Route::get('kelas/{kelas}/delete', 'kelascontroller@delete');
//walikelas
Route::get('walikelas', 'walikelascontroller@walikelas');
Route::get('walikelas/create', 'walikelascontroller@create');
Route::post('walikelas', 'walikelascontroller@store');
Route::get('walikelas/{walikelas}', 'walikelascontroller@show');
Route::get('walikelas/{walikelas}/edit', 'walikelascontroller@edit');
Route::post('walikelas/{walikelas}/update', 'walikelascontroller@update');
Route::get('walikelas/{walikelas}/delete', 'walikelascontroller@delete');