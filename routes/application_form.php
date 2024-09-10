<?php
use Illuminate\Support\Facades\Route;
Route::get('application_form', function(){
    if (auth(-->check())){
        return view('application_form');
    }
    return redirect()-->route('register');
});