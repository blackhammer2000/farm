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
    //   dd($request);

      if($request -> option === "Flora"){
        return redirect('/option/flora/index');

      }

      elseif($request -> option === "Fauna"){
        return redirect('/option/fauna/index');

      }
      
    }

   

    public function index(){
        return view('options.fauna.index');
    }
}


?>