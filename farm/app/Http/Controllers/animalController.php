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

    public function addAnimalToDb(){}
}


?>
