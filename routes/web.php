<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mcontrolle;



Route::get('/about' , [mcontrolle::class , 'about'])->name('about');

Route::get('/services' , [mcontrolle::class , 'services'])->name('services');

Route::get('/portfolio' , [mcontrolle::class , 'portfolio'])->name('portfolio');

Route::get('/contact' , [mcontrolle::class , 'contact'])->name('contact');

Route::post('form3',[mcontrolle::class , 'form3'])->name('form3');
