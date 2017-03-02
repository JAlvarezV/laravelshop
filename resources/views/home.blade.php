@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="row">
            @foreach($data["productos"] as $product)
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="{{$product->img_url}}" alt="">
                        <div class="caption">
                            <h4 style="color: red" class="pull-right">{{$product->price}}</h4>
                            <h4><a href="{{url('articles/').'/'.$product->id}}">{{$product->name}}</a>
                            </h4>
                            <p>{{$product->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
