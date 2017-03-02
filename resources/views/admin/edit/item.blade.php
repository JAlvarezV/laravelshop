@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editando producto</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form method="post" action="{{url('admin/save/item')}}">
                <input type="hidden" name="id" value="{{$producto->id}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="input-ref">Referencia</label>
                    <input type="text" name="ref" class="form-control" id="input-ref" placeholder="Referencia" value="{{$producto->name}}">
                </div>
                <div class="form-group">
                    <label for="input-name">Nombre</label>
                    <input type="text" name="name" class="form-control" id="input-name" placeholder="Name" value="{{$producto->name}}">
                </div>
                <div class="form-group">
                    <label for="input-desc">Descripcion</label>
                    <input type="text" name="description"class="form-control" id="input-desc" placeholder="Descripcion" value="{{$producto->description}}">
                </div>
                <div class="form-group">
                    <label for="input-price">Precio</label>
                    <input type="number" step="0.05" name="price" class="form-control" id="input-price" placeholder="Precio" value="{{$producto->price}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>
@endsection