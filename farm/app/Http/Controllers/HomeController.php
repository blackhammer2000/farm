<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function service()
    {
        return view('home.service');
    }
    public function product()
    {
        return view('home.product');
    }

    public function team()
    {
        return view('home.team');
    }

    public function testimonial()
    {
        return view('home.testimonial');
    }
    public function blog()
    {
        return view('home.blog');
    }
    public function detail()
    {
        return view('home.detail');
    }
    public function features()
    {
        return view('home.testimonial');
    }

}
