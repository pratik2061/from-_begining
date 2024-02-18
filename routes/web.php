<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\formcontroller;
use App\Http\Controllers\Customercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// route::get('/form',[formcontroller::class,'index']);
// route::post('/form',[formcontroller::class,'register']);


//new
route::get('/register',[Customercontroller::class,'index']);
route::post('/register',[Customercontroller::class,'show']);

