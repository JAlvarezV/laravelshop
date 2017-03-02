<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public static function getUserCart($id){
        $cart = Cart::where('user_id',$id)->first();
        if($cart==null){
            self::createCarForUser($id);
        }
        return Cart::where('user_id',$id)->first();
    }

    private static function createCarForUser($user_id){
        $temp = new Cart();
        $temp->user_id = $user_id;
        $temp->save();
    }

    public static function addLine($user_id,$item_id,$quantity){
        $item = Item::find($item_id);
        $tempLine = self::getLineByItem($user_id,$item_id);
        $cart = Cart::getUserCart($user_id);
        $tempLine->cart_id = $cart->id;
        $tempLine->item_id = $item_id;
        $tempLine->quantity += $quantity;
        $tempLine->subtotal = $item->price*$tempLine->quantity;
        $tempLine->save();
        $item->stock -= $quantity;
        $item->save();

        $cart->total += $tempLine->subtotal;
        $cart->save();
    }

    public static function getLineByItem($user_id,$item_id){
        $cart = Cart::getUserCart($user_id);
        $cart_line = CartLine::where('cart_id',$cart->id)->where('item_id',$item_id)->first();
        if($cart_line==null){
            $cart_line = new CartLine();
            $cart_line->cart_id = $cart->id;
            $cart_line->item_id = $item_id;
        }
        return $cart_line;
    }

    public static function deleteLine(){

    }

    public static function getLines($user_id){
        $cart = Cart::getUserCart($user_id);
        return CartLine::where("cart_id",$cart->id)->get();
    }

}
