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
route::get('/', function(){
  return view('customer.index');
});
route::get('/register',[Customercontroller::class,'index']);
route::post('/register',[Customercontroller::class,'show']);

Route::group(['prefix'=>'/customer'], function(){
  route::get('/view',[Customercontroller::class,'view']);
  route::get('/delete/{id}',[Customercontroller::class,'delete']);
  route::get('/forcedelete/{id}',[Customercontroller::class,'forcedelete']);
  route::get('/restore/{id}',[Customercontroller::class,'restore']);
  route::get('/edit/{id}',[Customercontroller::class,'edit']);
  route::get('/trash',[Customercontroller::class, 'trash']);
});

Route::get('/upload', function(){
  return view('customer/upload');
});
route::post('/upload',[Customercontroller::class,'upload']);

//session
// route::get('/get-session', function(){
//      $session = session()->all();
// });

