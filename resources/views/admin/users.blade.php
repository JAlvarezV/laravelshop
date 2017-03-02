@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Usuarios</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->surname}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                            <a href="{{url('admin/delete/user/')."/".$user->id}}"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>
                            <a href="{{url('admin/edit/user/')."/".$user->id}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection