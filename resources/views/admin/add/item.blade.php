@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Añadiendo producto</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form method="post" action="{{url('admin/save/nitem')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="input-ref">Referencia</label>
                    <input type="text" name="ref" class="form-control" id="input-ref" placeholder="Referencia" value="">
                </div>
                <div class="form-group">
                    <label for="input-name">Nombre</label>
                    <input type="text" name="name" class="form-control" id="input-name" placeholder="Name" value="">
                </div>
                <div class="form-group">
                    <label for="input-desc">Descripcion</label>
                    <input type="text" name="description"class="form-control" id="input-desc" placeholder="Descripcion" value="">
                </div>
                <div class="form-group">
                    <label for="input-img">URL imagen</label>
                    <input type="text" name="img_url" class="form-control" id="input-img" placeholder="http://www.example.com/image.jpg" value="">
                </div>
                <div class="form-group">
                    <label for="input-price">Precio</label>
                    <input type="number" step="0.05" name="price" class="form-control" id="input-price" placeholder="Precio" value="">
                </div>
                <div class="form-group">
                    <label for="input-stock">Stock</label>
                    <input type="number" step="0.01" name="stock" class="form-control" id="input-stock" placeholder="Stock" value="">
                </div>
                <div class="form-group">
                    <label for="input-stock-min">Stock Mínimo</label>
                    <input type="number" step="0.01" name="stock_min" class="form-control" id="input-stock-min" placeholder="Stock mínimo" value="0.01">
                </div>
                <button type="submit" class="btn btn-success">Guardar producto</button>
            </form>
        </div>
    </div>
@endsection