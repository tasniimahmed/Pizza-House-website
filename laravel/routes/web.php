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

//ex: www.eng.com/home
//then the function to be called for this route, here the function only returns a view
//the view is the welcome.php page found in resources folder then view
Route::get('/', function () {
    return view('welcome');
});


//here we want to pass variables to the view so that we can use them there
//that's done by passing dictionary to the view
//the key is tha variable that we can access in the view ex: type is the pizza type
Route::get('/pizzas', 'PizzaController@index');
Route::get('/pizzas/create','PizzaController@create' );
//this grabs the id from the url and pass it to this call back function
Route::get('/pizzas/{id}','PizzaController@show' );

//post
Route::post('/pizzas', 'PizzaController@store');