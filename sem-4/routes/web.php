<?php

use App\Http\Controllers\democontroller;
use Dotenv\Repository\Adapter\PutenvAdapter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationcontroller;
use App\Http\Controllers\customercontroller;
use App\Http\Controllers\fileuploadcontroller;
use App\Http\Controllers\UserController;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});


// Route::get('/demo', function () {
//     echo "hello world !!";
// });

// Route::post('/test', function () {
//     echo "testing the route";
// });
// Route::any('/test', function () {
//     echo "testing the route";
// });

// Route::get('/demo/{name}/{id?}', function ($name,$id=null) {
//     $data = compact('name', 'id');  
//     // print_r($data);      
//     return view('demo')->with($data);  
// });
// Route::put('/test', function(){
//     echo "testing the route";
// });

// route::patvh('/demo', function)

// ---------------------------------------------------------
Route::get('/demo' ,[democontroller::class ,"index"]); 
Route::get('/register-d' ,[registrationcontroller::class ,"index"]); 
Route::post('/register-d' ,[registrationcontroller::class ,"register_d"]); 

// Route::get('/customer', function () {
//     $customer = customer::all();
//     echo "<pre>";
//     print_r($customer->toArray());
// }); 

// ------------------------------------------------------------------
Route::get('/customer',[customercontroller::class ,"view"]);
Route::get('/customer/register' ,[customercontroller::class ,"create"])->name('customer.register'); 
Route::post('/customer/register' ,[customercontroller::class ,"customer"]); 
Route::get('/customer/delete/{id}' ,[customercontroller::class ,"delete"])->name('customer.delete');
Route::get('/customer/edit/{id}' ,[customercontroller::class ,"edit"])->name('customer.edit');
Route::post('/customer/update/{id}' ,[customercontroller::class ,"update"])->name('customer.update');

// Route::group(['prefix'=> '/customer'], function(){
//     Route::get('/',[customercontroller::class ,"view"]);
//     Route::get('/register' ,[customercontroller::class ,"create"])->name('customer.register'); 
//     Route::post('/register' ,[customercontroller::class ,"customer"]); 
//     Route::get('/delete/{id}' ,[customercontroller::class ,"delete"])->name('customer.delete');
//     Route::get('/edit/{id}' ,[customercontroller::class ,"edit"])->name('customer.edit');
//     Route::post('/update/{id}' ,[customercontroller::class ,"update"])->name('customer.update');
// });
// ----------------------------------------------------------------------
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('get-all-session-data', function () {
    echo "<pre>";   
    print_r(session()->all());
});

Route::get('set-session', function (Request $request) {
    $request->session()->put('name', 'jatin nabhoya');
    $request->session()->put('age', '25');
    return redirect('get-all-session-data');
});

Route::get('destroy-session', function (Request $request) {
    $request->session()->forget('name');
    $request->session()->forget('age');
    return redirect('get-all-session-data');
});
// ----------------------------------------------------------------
Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload', function () {
    echo "</pre>";
    return view('upload');
});

Route::get('/upload',[fileuploadcontroller::class ,'index']);

Route::post('/upload',[fileuploadcontroller::class ,'upload']);

// ---------------------------------------------------------

Route::resource('/user',UserController::class);