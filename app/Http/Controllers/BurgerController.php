<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Burger;

class BurgerController extends Controller
{

    // one way to make all the routes of the controller protected
    // public function __construct(){
    //     $this->middleware('auth');
    // }

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

        return view('burgers.index', [
            'burgers' => $burgers,
            // 'name' => request('name'),
            // 'age' => request('age')
        ]);
    }

    public function show($id)
    {
        $burger = Burger::findOrFail($id);
        return view('burgers.show', ['burger' => $burger]);
    }

    public function create()
    {
        return view('burgers.create');
    }

    public function store()
    {
        // error_log(request(('name')));
        // error_log(request(('patty')));
        
        $burger = new Burger();

        $burger->name= request('name');
        $burger->patty= request('patty');
        $burger->base= request('base');
        $burger->toppings = request('toppings');
        // error_log(request('toppings'))
        $burger->save();


        error_log($burger);

        return redirect('/')->with('msg','Thanks for your order');
    }

    public function destroy($id){
        $burger = Burger::findOrFail($id);
        $burger->delete();

        return redirect('/burgers');
    }
}
