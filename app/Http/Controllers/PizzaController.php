<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        //$pizzas = User::all();
        //$users = User::orderBy('name', 'desc')->get();
        //$users = User::where('name', 'steve')->get();
        //$users = User::latest()->get();

        return view('pizzas.index',[
            'test',
        ]);

    }

    public function show($id)
    {
        //$pizza = Pizza::findOrFail($id);
        return view('pizzas.show');
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function validate()
    {
        return view('pizzas.create');
    }
}
