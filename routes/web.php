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
route::get('/customer/view',[Customercontroller::class,'view']);
route::get('/customer/delete/{id}',[Customercontroller::class,'delete']);
route::get('/customer/forcedelete/{id}',[Customercontroller::class,'forcedelete']);
route::get('/customer/restore/{id}',[Customercontroller::class,'restore']);
route::get('/customer/edit/{id}',[Customercontroller::class,'edit']);
route::get('customer/trash',[Customercontroller::class, 'trash']);
//session
// route::get('/get-session', function(){
//      $session = session()->all();
// });

