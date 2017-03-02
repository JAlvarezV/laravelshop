<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lines = Cart::getLines(Auth::user()->id);

        $data = [
            "productos" => Item::all(),
            "cart" => $lines,
        ];

        return view('home')->with("data",$data);
    }
}
