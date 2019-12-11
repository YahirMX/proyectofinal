@extends('store.template')

@section('content')
    <h1>Detalle del Producto</h1>

    <div class="product-block">
        <img src="{{ $product->image }}" alt="{{ $product->slug }}" width="300">
    </div>

    <div class="product-block">
        <h3>{{ $product->name }}</h3>
        <div class="product-info">
            <p>{{ $product->descripcion }}</p>
            <p>Precio: ${{ number_format($product->price, 2) }}</p>
            <p>
                <a href="#">La quiero</a>
            </p>
        </div>
    </div>
    
    <p>
        {{--alias para ir al home definido en las rutas del archivo web.php--}}
        <a href="{{ route('home') }}"> Regresar</a>
    </p>
@stop