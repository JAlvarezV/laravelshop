@extends('layouts.app')
@section('content')
    <div class="container text-center">

        <div class="col-md-5 col-sm-12">
            <div class="bigcart"></div>
            <h1>Tu carrito de la compra</h1>
        </div>

        <div class="col-md-7 col-sm-12 text-left">
            <ul>
                <li class="row list-inline columnCaptions">
                    <span>Cantidad</span>
                    <span>Artículo</span>
                    <span>Precio</span>
                </li>

                @foreach($data["lines"] as $line)
                    <li class="row">
                        <span class="quantity">{{$line->quantity}}</span>
                        <span class="itemName">{{$line->item->name}}</span>
                        <span class="popbtn"><a class="arrow"></a></span>
                        <span class="price">{{$line->item->price}}</span>
                    </li>
                @endforeach

                <li class="row totals">
                    <span class="itemName">Total:</span>
                    <span class="price">{{$data["cart"]->total}}</span>
                    <span class="order"> <a href="{{url('cart/delete')}}" class="text-center">FINALIZAR COMPRA</a></span>
                </li>
            </ul>
        </div>

    </div>

    <!-- The popover content -->

    <div id="popover" style="display: none">
        <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
    </div>
@endsection