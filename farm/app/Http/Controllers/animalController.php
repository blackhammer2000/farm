<?php

namespace App\Http\Controllers;

use App\Models\Animal;
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

        $animal = new Animal();
        $animal->name = $request->name;
        $animal->quantity = $request->quantity;
        $animal->disease = $request->disease;

        $animal->save();

       redirect('/options/flora/index');
    }

    public function updateAnimalInDB(Request $request, Animal $animal){}
    public function deleteAnimalFromDB(Animal $animal){}
}


?>
