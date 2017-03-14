<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->isAdmin)
            return view('admin.index');
        $data = [
            "productos" => Item::all(),
            "cart" => Cart::getLines(Auth::user()->id),
        ];
        return view('home')->with("data", $data);
    }

    public function listUsers()
    {
        $users = User::where('isAdmin','0')->get();
        return view('admin.users')->with("users",$users);
    }

    public function listItems()
    {
        $items = Item::all();
        return view('admin.items')->with("productos",$items);
    }

    public function deleteItem($id){
        Item::find($id)->delete();
        return redirect()->back();
    }

    public function deleteUser($id){
        User::find($id)->delete();
        return redirect()->back();
    }

    public function editItem($id){
        $producto = Item::find($id);
        return view('admin.edit.item')->with("producto",$producto);
    }

    public function editUser($id){
        $user = User::find($id);
        return view('admin.edit.user')->with("user",$user);
    }

    public function updateUser(Request $request){
       $user = User::find($request->id);
       if($request->name!="")
        $user->name = $request->name;
       $user->surname = $request->surname;
       $user->address = $request->address;
       $user->phone = $request->phone;
       $user->save();
       return redirect()->back();
    }

    public function updateItem(Request $request){
        $item = Item::find($request->id);
        if($request->name!="")
            $item->name = $request->name;
        $item->ref = $request->ref;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->save();
        return redirect()->back();
    }

    public function newUser(){
        return view('admin.add.user');
    }

    public function newItem(){
        return view('admin.add.item');
    }

    public function addUser(Request $request){
        $tempUser = new User();
        $tempUser->name = $request->name;
        $tempUser->surname = $request->surname;
        $tempUser->email = $request->email;
        $tempUser->address = $request->address;
        $tempUser->phone = $request->phone;
        $tempUser->save();
        return redirect()->to('admin/usuarios');
    }

    public function addItem(Request $request){
        $tempItem = new Item();
        $tempItem->ref=$request->ref;
        $tempItem->name=$request->name;
        $tempItem->description=$request->description;
        $tempItem->img_url=$request->img_url;
        $tempItem->price=$request->price;
        $tempItem->stock=$request->stock;
        $tempItem->stock_min=$request->stock_min;
        $tempItem->save();
        return redirect()->to('admin/productos');
    }



}
