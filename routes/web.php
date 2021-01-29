<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pizzas', function () {
    
    $pizzas=[ ['type' => 'pepperoni', 'base' => 'tomato sauce','price'=>21],
        ['type' => 'Veggie', 'base' => 'tomato sauce', 'price' => 13],
        ['type' => 'BBQ', 'base' => 'BBQ sauce', 'price' => 11],
        ['type' => 'Super Supprime', 'base' => 'Special Sauce +tomato sauce', 'price' => 13], ];
    return view('pizzas',['pizzas'=>$pizzas]);
});
