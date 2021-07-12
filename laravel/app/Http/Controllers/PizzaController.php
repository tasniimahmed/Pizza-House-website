<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pizza; //this is the pizza table that we will use to get the data inside the db

class PizzaController extends Controller
{
    //the call back function for the url /pizza
    public function index(){
         /*as if getting data from the db*/
        /*
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy']
      ];
      */
    
      /**getting the data from the db from the model**/
      //$pizzas = pizza::all();
      //$pizzas = pizza::orderBy('name', 'desc')->get();
      $pizzas = pizza::where('type' , 'hawaii')->get();
    
    /* ROUTING */
    //accessing query parameters
    //inside the request func write the name of the query parameter inside the url you want to read
    $name= request('name');
    $age = request('age');
    

    //key and value
    return view('pizzas.index',
    ['pizzas' => $pizzas]);
    }

    //the callback function for the url /pizza/id
    public function show($id){
        //use the id to query the db for a record
        $pizza= pizza::findorfail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){
        //use the id to query the db for a record
        return view('pizzas.create');
    }

    public function store() {
        //error log ad print() to print the data of the request
       /* error_log(request('name'));
        error_log(request('type'));
        error_log(request('base'));*/

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
    
        $pizza->save();
    
        return redirect('/')->with('mssg', 'Thanks for your order!');
    
    
      }
}
