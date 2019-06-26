<?php

use illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('/abp',function(Request $request){
    // $nama = $request->input('nama');sama dengan yg dibawah  ato bisa $nama = $request->input('nama','namakedua'); // 
    $nama = $request->nama;
    $userAgent = $request->header('User-Agent');    

    return 'Welcome to ABP,' .$nama;
    // http://localhost:8000/abp?nama=imam
});

// Route::get('/mahasiswa/{nim}',function($nim){
//     return 'NIM:'.$nim;
//     // http://localhost:8000/mahasiswa/123
// });

// menggunakan controller
Route::get('/mahasiswa/{nim}/{dir2}','AbpController@getMahasiswa');// http://localhost:8000/mahasiswa/456/w


// redirect halaman lama ke baru

    

