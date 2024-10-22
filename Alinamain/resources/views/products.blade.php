@extends('layout') 

@section('content') <!--шаблон, Директива @extends указывает, что данный шаблон наследует основной макет layout.blade.php-->
    <h1>Products</h1>
    <div class="products-grid">
        @foreach($products as $product)
            <x-product-card :name="$product['name']" :cost="$product['cost']" :amount="$product['amount']"/>  <!--(:) перед именем атрибута указывает на то, что передается переменная-->
        @endforeach
    </div>
@endsection
