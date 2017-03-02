<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserSettingsController extends Controller
{


    /**
     * UserSettingsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $data = [
            "cart" => Cart::getUserCart($user->id),
            "user" => $user,
        ];
        return view('user.settings')->with("data",$data);
    }


    public function update(Request $request){
        $user = Auth::user();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->back();
    }
}
