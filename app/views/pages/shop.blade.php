@extends('layouts.master')
@section('content')
    @include('layouts.navbar')
    @include('sections.advertisement')
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">

                    @include('pages.sub.category')

                    @include('pages.sub.bands')

                    @include('pages.sub.price-range')

                    @include('pages.sub.ads')

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Productos - {{$text}}</h2>
                    @foreach($products->getCollection()->all() as $product)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/products/{{$product->id}}.jpg" alt="" />
                                    <h2></h2>
                                    <p>{{$product->name}}</p>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2></h2>
                                        <p>{{$product->name}}</p>
                                        <a href="/product/{{$product->id}}" class="btn btn-default add-to-cart">Ver mas Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    {{$products->links() }}

                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>
    @include('layouts.footer')
@stop