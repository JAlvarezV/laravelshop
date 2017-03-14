@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Productos
                <a href="{{url('admin/add/item')}}">
                    <button class="btn btn-success">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Añadir producto
                    </button>
                </a>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Referencia</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->ref}}</td>
                        <td>{{$producto->name}}</td>
                        <td>{{$producto->description}}</td>
                        <td>{{$producto->price}}</td>
                        <td>{{$producto->stock}}</td>
                        <td>
                            <a href="{{url('admin/delete/item/')."/".$producto->id}}"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>
                            <a href="{{url('admin/edit/item/')."/".$producto->id}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection