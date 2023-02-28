<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crop;
use Illuminate\Support\Facades\Validator;



class cropController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('options.flora.index');
    }

// use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Auth\RegistersUsers;
// use Illuminate\Support\Facades\Hash;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'string', 'max:255'],
            'disease' => ['required', 'string', 'max:255',],
        ]);
    }

    /**
     * Create a new crop instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Crop
     */
    public function addCropToDb(Request $request)
    {
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

        // return Crop::create([
        //     'name' => $data['name'],
        //     'quantity' => $data['quantity'],
        //     'disease' => $data['disease'],
        // ]);
    }
}

?>
