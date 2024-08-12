<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\CRUDPhoto;
use App\Http\Controllers\halloController;
use App\Http\Controllers\PageControllerSatu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengajarController;
use App\Http\Controllers\WelcomeController;

Route::get('/hellow',[
    halloController::class,
    'greeting'
]);

Route::get('/greeting',[
    WelcomeController::class,
    'greeting'
]);

Route::get('/selamat', function(){
    return view('hello',['name'=>'Ilham']);
});


Route::resource('crud',CRUDController::class);

Route::resource('photos',CRUDPhoto::class)->only([
    'index'
    ,'show'
]);
Route::resource('photos',CRUDPhoto::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);


Route::get('pasar-buah',[PageControllerSatu::class,'satu']);

Route::get('/daftar-dosen', [pengajarController::class,'daftarPengajar']);
Route::get('/tabel-pengajar', [pengajarController::class,'tabelPengajar']);
Route::get('/blog-dosen', [pengajarController::class,'blogPengajar']);

Route::fallback(function (){
    return "maaf,alamat ini tidak ditemukan";
});

route::get('/pesandisini',function (){
    return '<h1> Pesan disini </h1>';
});
route::redirect('contact-us', '/pesandisini');

route::prefix('/polinema')->group(function(){
    route::get('/dosen', function(){
        echo '<h1> Daftar dosen </h1>';
    });
    route::get('/tendik', function(){
        echo '<h1> Daftar tendik </h1>';
    });
    route::get('/jurusan', function(){
        echo '<h1> Daftar jurusan </h1>';
    });
});


route::get('/about',function(){
    return view ('about');
})->name('about');
route::get('/tampil',function(){
    return view ('tampil');
})->name('tampil');

route::get('/users/{name?}',function ($name=null){
    return 'Nama Saya '.$name;
});
route::get('/kodebarang/{jenis?}/{merek?}',function ($jk='k01', $mrk='nokia'){
    return "kode barang $jk dan nama barang $mrk";
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',function(){
    return 'hello world';
});
route::get('/VSGA', function(){
    return 'selamat datang di pelatihan VSGA';
});
route::get('/aboutNim',function(){
    return 'NIM : 2231750001';
});
route::get('/user/{name}',function ($name){
    return 'Nama Saya '.$name;
});
Route::get('/posts/{post}/{comment}', function ($post, $comment){
    return 'Pos ke- ' . $post . " Komentar ke-: ".$comment;
});