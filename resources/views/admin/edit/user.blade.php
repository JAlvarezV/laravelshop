@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editando usuario</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form method="post" action="{{url('admin/save/user')}}">
                <input type="hidden" name="id" value="{{$user->id}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="input-name">Nombre</label>
                    <input type="text" name="name" class="form-control" id="input-name" placeholder="Name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="input-surname">Apellidos</label>
                    <input type="text" name="surname"class="form-control" id="input-surname" placeholder="Surname" value="{{$user->surname}}">
                </div>
                <div class="form-group">
                    <label for="input-address">Dirección</label>
                    <input type="text" name="address" class="form-control" id="input-address" placeholder="Address" value="{{$user->address}}">
                </div>
                <div class="form-group">
                    <label for="input-phone">Teléfono</label>
                    <input type="tel" name="phone" class="form-control" id="input-phone" placeholder="Phone" value="{{$user->phone}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>
@endsection