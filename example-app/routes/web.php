<?php

use App\Http\Controllers\ContactCon;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactCon::class,'index']);
Route::post('/thankyou', [ContactCon::class,'store'])->name("form.thankyou");