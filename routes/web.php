<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
Route::get('/hello', [WelcomeController::class,'hello']);


Route::get('/world', function () { return 'World';
});

// Route::get('/', function (){ 
//     return 'Selamat Datang';
// });

use App\Http\Controllers\PageController;
// Route::get('/', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class,'articles']);

// Route::get('/about', function (){ 
//     return '2241720013 <br>Nazwa Ayunda Mirrohillah';
// });



Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

// Route::get('/articles/{id}', function ($id) { 
//         return "Halaman Artikel dengan ID {{$id}}";
// });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;

Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticlesController::class);

use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([ 'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
]);


