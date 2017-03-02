<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class SingleItemController extends Controller
{
    /**
     * SingleItemController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){
        $data = [
          "producto" => Item::find($id),
          "cart" => Cart::getLines(Auth::user()->id),
        ];

        return view('single')->with("data",$data);
   }
}
