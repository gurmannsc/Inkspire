<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;

// Laravel routes use an array syntax to specify:
// [ControllerClass::class, 'methodName']
Route::get('/', [IdeaController::class,'index'])->name('home');

Route::post('/generate-ideas', [IdeaController::class,'generateIdeas'])->name('ideas.generate');

Route::get('/contact-us', function(){
    return view('contact');
})->name('contact');

Route::get('/pricing-info', function(){
    return view('pricing');
})->name('pricing');