@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <form method="post" action="{{url('user')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="input-name">Nombre</label>
                <input type="text" name="name" class="form-control" id="input-name" placeholder="Name" value="{{$data["user"]->name}}">
            </div>
            <div class="form-group">
                <label for="input-surname">Apellidos</label>
                <input type="text" name="surname"class="form-control" id="input-surname" placeholder="Surname" value="{{$data["user"]->surname}}">
            </div>
            <div class="form-group">
                <label for="input-address">Dirección</label>
                <input type="text" name="address" class="form-control" id="input-address" placeholder="Address" value="{{$data["user"]->address}}">
            </div>
            <div class="form-group">
                <label for="input-phone">Teléfono</label>
                <input type="tel" name="phone" class="form-control" id="input-phone" placeholder="Phone" value="{{$data["user"]->phone}}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>
@endsection