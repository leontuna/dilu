
@extends('admin.dashboard')
@section('main')
    <h2 class="title text-center">Productos - Todos los Productos</h2>
    <div class="col-sm-2">
        <a href="/dashboard/products/new"  class="btn btn-success btn-block">Nuevo</a>
    </div>
    <div class="col-sm-8" style="margin-bottom: 15px;">
        <select class="form-control" id="list">
            <option value="#">Filtrar por Categoria</option>
            @foreach(Type::all() as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <a href="#" id="filtro" class="btn btn-success btn-block">FILTRAR</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Codigo</th>
            <th>Peso</th>
            <th>Tallas</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Acciones</th>
            <th>Foto</th>
        </tr>
        @foreach(Product::all() as $product)
            <?php $type = Type::find($product->types_id); ?>
            <tr>
                <td>{{$product->code}}</td>
                <td>{{$product->weight}}</td>
                <td>{{$product->size}}</td>
                <td>{{$product->name}}</td>
                <td>{{$type['name']}}</td>
                <td>{{$product->price}}</td>
                <td><a href="/dashboard/products/{{$product->id}}/edit"  data-toggle="tooltip" data-placement="top" title="Editar"><i class="glyphicon glyphicon-pencil" style="font-size: 20px;margin-top: 10px;"></i></a><a href="/dashboard/products/{{$product->id}}/delete" style="margin-left: 10px;" data-toggle="tooltip" data-placement="top" title="Borrar"><i class="glyphicon glyphicon-trash" style="font-size: 20px;"></i></a></td>
                @if($product->img_path == "")
                    <td>NO</td>
                @else
                    <td>SI</td>
                @endif
            </tr>
        @endforeach
    </table>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
        $("#filtro").click(function(){
            var value = $("#list").val();
            if(value == "#")
            {
                alert("No ha Seleccionado una Categoria Valida")
            }
            else
            {
                window.location.href = "/dashboard/products/type/"+value;
            }
        })
    </script>
@endsection