<?php

use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\CompraLibrosController;
use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('biografia','biografia');
Route::view('contact','contact');
Route::view('libros','libros');
Route::view('home','home');
Route::view('agregarComent','agregarComent');

/*Controller de comentarios*/
Route::get('/',[ComentariosController::class,'index']);
Route::get('index',[ComentariosController::class,'index']);
Route::get('agregarComent',[ComentariosController::class,'create']);
Route::post('agregarComent',[ComentariosController::class,'store'])->name('comentarios');


/* Rutas para libros */
Route::view('libros.libro1','libros.libro1');
Route::view('libros.libro2','libros.libro2');
Route::view('libros.libro3','libros.libro3');
Route::view('libros.libro4','libros.libro4');
Route::view('libros.libro5','libros.libro5');
Route::view('libros.libro6','libros.libro6');

/*Las rutas donde se guarda y envia la información para el email */
Route::get('libros',[CompraLibrosController::class,'index'])->name("indiceComprar");
Route::post('libros.libros1',[CompraLibrosController::class,'store'])->name("storeComprar");
Route::post('libros.libros2',[CompraLibrosController::class,'store'])->name("storeComprar");
Route::post('libros.libros3',[CompraLibrosController::class,'store'])->name("storeComprar");
Route::post('libros.libros4',[CompraLibrosController::class,'store'])->name("storeComprar");
Route::post('libros.libros5',[CompraLibrosController::class,'store'])->name("storeComprar");
Route::post('libros.libros6',[CompraLibrosController::class,'store'])->name("storeComprar");


/*Email de la pag Contactanos*/ 

Route::get('contact',[ContactanosController::class,'index'])->name('indiceEmail');
Route::post('contact',[ContactanosController::class,'store'])->name('storeEmail');

/*Ruta Login*/ 
Auth::routes();
Route::get('index', [HomeController::class, 'index'])->name('home');
