<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get(' ', function () {
    if (auth()->check()){ ## Check auth status before accesing the / route 
        return view('dash');
    }
    return redirect()->route('register');
});

Route::get(' ', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('application_form', function(){
    if (auth()->check()){
        return view('application_form');
    }
    return redirect()->route('register');
})->middleware(['auth', 'verified'])->name('application_form');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
