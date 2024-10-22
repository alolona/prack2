@extends('layout')

@section('content')
    <h1>Products</h1>
    <div class="products-grid">
        @foreach($products as $product)
            <x-product-card :name="$product['name']" :cost="$product['cost']" :amount="$product['amount']"/> <!--Blade-компонент, атрибуnы, :перменная-->
        @endforeach
    </div>
@endsection
