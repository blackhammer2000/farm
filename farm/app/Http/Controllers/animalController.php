<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class animalController extends Controller{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        return view('options.fauna.index');
    }

    public function addAnimalToDb(Request $request){
        dd($request);

        $request->validate([
           'name' => ['required', 'string', 'max:255'],
           'quantity' => ['required', 'string', 'max:255'],
           'disease' => ['required', 'string', 'max:255',],
        ]);

        $crop = new Crop();
        $crop->name = $request->name;
        $crop->quantity = $request->quantity;
        $crop->disease = $request->disease;

        $crop->save();

       redirect('/options/flora/index');
    }
}


?>
