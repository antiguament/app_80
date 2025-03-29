<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();






use App\Http\Controllers\ImageController;
Route::get('/show', function () {
    return view('show');
});


use App\Http\Controllers\UploadController;



Route::get('pagina', function () {
    return view('pagina');
}); 

Route::get('/admin/categorias', function () {
    return view('admin/categorias');
})->middleware('auth')->name('admin.categorias');
 
Route::get('/admin/producto', function () {
    return view('admin.producto');
})->middleware('auth')->name('admin.producto');

Route::get('/upload', [UploadController::class, 'index'])->name('upload.index');
Route::post('/upload', [UploadController::class, 'upload'])->name('upload.image');
Route::view('/', 'welcome')->name('welcome');
Route::view('contacto', 'contacto')->name('contacto');


Route::get('blog', [postController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('blog', [postController::class, 'store'])->name('posts.store');

Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');



Route::view('nosotros', 'nosotros')->name('nosotros');

Route::view('galeria', 'galeria')->name('galeria');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
