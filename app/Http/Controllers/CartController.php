<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{


    /**
     * CartController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get(){
        $user = Auth::user();
        $cart = Cart::getUserCart($user->id);
        $cart_lines = Cart::getLines($user->id);
        $data = [
          "cart" => $cart,
          "lines" => $cart_lines,
        ];

        return view('cart')->with("data",$data);
    }

    public function add(Request $request){
        $user = Auth::user();
        $cart = Cart::getUserCart($user->id);
        if($cart==null){
            Cart::createCarForUser($user->id);
        }

        Cart::addLine($user->id,$request->id,$request->quantity);
        return redirect()->back();
    }

    public function delete(){
        $user = Auth::user();
        $cart = Cart::getUserCart($user->id);
        $cart->delete();
        return redirect()->back();
    }

}
