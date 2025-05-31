<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/habilidades', function () {
    return view('secciones.habilidades');
})->name('habilidades');

Route::get('/proyectos', function () {
    return view('secciones.proyectos');
})->name('proyectos');

Route::get('/contacto', function () {
    return view('secciones.contacto');
})->name('contacto');

Route::get('/about', function () {
    return view('secciones.about');
})->name('about');
