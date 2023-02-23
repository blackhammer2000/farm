<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class optionsController extends Controller{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function index(){
    //     return view('crop.index');
    // }

    public function chooseOption(Request $request){
      dd($$request);

      if($request -> option === "flora"){
        return redirect('/option/flora/index');
      }

      if($request -> option === "fauna"){
        return redirect('/option/fauna/index');
      }
      
    }
}


?>