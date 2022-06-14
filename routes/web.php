<?php
use App\Http\Controllers\PortfolioController;

Route::VIEW('/', 'home')->name('home');
Route::VIEW('/about', 'about')->name('about');
Route::VIEW('/contact', 'contact')->name('contact');
Route::get('/portfolio', PortfolioController::class)->name('portfolio');



// Route::get('/', function(){
//     $nombre = "Juan";
//     return view('home', compact('nombre'));
// })->name('home');

// Route::get('jc/{nombre?}', function($nombre = "Anonimo"){
//     return "hola " . $nombre;
// })->name('nombre');



