<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VariantesCovidController;
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

//php artisan serve
//http://localhost:8000/

Route::get('/', function () {
    return "Hola!";
});

Route::get('/variantes', 
            'VariantesCovidController@index');

/*Route::get('/variantes', 
    [VariantesCovidController::class,'index']);*/
