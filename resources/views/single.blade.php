@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           <div class="col-xs-12">
               <h1>{{$data["producto"]->name}}</h1>
           </div>
            <div class="col-xs-12 col-sm-6">
                <div id="single-item-img">
                    <img src="{{$data["producto"]->img_url}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p>{{$data["producto"]->description}}</p>
                <p class="single-item-price"> {{$data["producto"]->price}}€</p>
                <label for="qt">Cantidad</label>
                <p><small>Quedan {{$data["producto"]->stock}} unidades.</small></p>
                <form action="{{url('cart')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$data["producto"]->id}}">
                    <input id="qt" type="number" name="quantity" required value="1" min="1" max="{{$data["producto"]->stock}}"><br>
                    @if($data["producto"]->stock>0)
                        <button type="submit" id="btn-add-cart">Añadir a la cesta</button>
                    @else
                        <p>No quedan unidades.</p>
                    @endif
                </form>

            </div>


        </div>
    </div>
@endsection