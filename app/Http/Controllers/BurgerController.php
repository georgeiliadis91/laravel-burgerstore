<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Burger;

class BurgerController extends Controller
{
    public function index()
    {
        // $burgers = [
        //     ['type' => 'texan', 'meat' => 'bison'],
        //     ['type' => 'mexican', 'meat' => 'beef'],
        //     ['type' => 'arabic', 'meat' => 'lamb']
        // ];

        // $burgers = Burger::all();

        // $burgers = Burger::orderBy('base', 'desc')->get();

        // $burgers = Burger::where('patty', 'buffalo')->get();
        $burgers = Burger::latest()->get();

        $name = request('name');
        $age = request('age');

        return view('burgers', [
            'burgers' => $burgers,
            // 'name' => request('name'),
            // 'age' => request('age')
        ]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
