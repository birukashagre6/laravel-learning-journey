<?php

use App\Http\Controllers\carController;
use App\Http\Controllers\singleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $abouturl = route('biruk-as');

    dd($abouturl);
    return view('welcome');
});
Route::view('/biruk-as','biruk-as')->name('biruk-as');

/* Route::get('/about', function () {
    return view('about');
});

Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
}); */

/* Route::get('/user/{name?}', function (?string $name = 'John') {
    return $name;
});
 */


/* Route::get('/user/{id}/{name}', function (string $id, string $name) {
  return 'User '.$id.' '.$name;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']); */

/* Route::get('/search/{search}', function (string $search) {
    return 'hello :'. $search;
})->where('search', '.*'); */

Route::get('/sum/{num1}/{num2}', function(string $num1, string $num2){
    return $num1 + $num2;
})->whereNumber('num1')->whereNumber('num2');

// Route::get('/car',[carController::class, 'index']);

// Route::controller(carController::class)->group(function(){
//     Route::get('/car', 'index');
//     Route::get('/mycar', 'mycar');
// });

Route::get('/car',carController::class);
Route::get('/cars',[carController::class,'index']);
Route::get('/mycar',[carController::class,'mycar']);