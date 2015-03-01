
@extends('admin.dashboard')
@section('main')
    <h2 class="title text-center">Productos - {{$product->name}}</h2>

    {{Form::open(array('url' => '/dashboard/products/'.$product->id.'/edit','files' => true))}}
        <div class="form-group">
            {{Form::label('code', 'Codigo') }}
            {{Form::text('code',$product->code,array('class' => 'form-control','id' => 'code','placeholder' => 'Ingrese Codigo'))}}
        </div>
        <div class="form-group">
            {{Form::label('weight', 'Peso') }}
            {{Form::text('weight',$product->weight,array('class' => 'form-control','id' => 'weight', 'placeholder' => 'Ingrese Peso'))}}
        </div>
        <div class="form-group">
            {{Form::label('size', 'Talla') }}
            {{Form::text('size',$product->size,array('class' => 'form-control','id' => 'size', 'placeholder' => 'Ingrese Talla'))}}
        </div>
        <div class="form-group">
            {{Form::label('name', 'Nombre') }}
            {{Form::text('name',$product->name,array('class' => 'form-control','id' => 'name', 'placeholder' => 'Ingrese Nombre'))}}
        </div>
        <div class="form-group">
            {{Form::label('reference', 'Referencia') }}
            {{Form::text('reference',$product->reference,array('class' => 'form-control','id' => 'reference', 'placeholder' => 'Ingrese Referencia'))}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Precio') }}
            {{Form::text('price',$product->price,array('class' => 'form-control','id' => 'price', 'placeholder' => 'Ingrese Precio'))}}
        </div>
    <?php $types = Type::all();
            $data = array();
          foreach($types as $type)
              $data[$type->id] = $type->name ?>
        <div class="form-group">
            {{Form::label('type', 'Seleccione Categoria') }}
            {{Form::select('type',$data, $product->types_id,array('class' => 'form-control','id' => 'type'))}}
        </div>
        <div class="form-group">
            {{Form::label('img', 'Subir Foto') }}
            {{Form::file('img',array('class' => 'form-control','id' => 'img'))}}
        </div>
        <div class="form-group">
            {{Form::submit('Guardar Cambios',array('class'=>'btn btn-default'));}}
        </div>

    {{Form::close()}}

@endsection