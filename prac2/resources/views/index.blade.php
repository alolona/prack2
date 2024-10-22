@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <ul>
        @foreach($products as $product)
            <li>
                <strong>{{ $product->name }}</strong> - Cost: {{ $product->cost }} - Amount: {{ $product->amount }}
            </li>
        @endforeach
    </ul>
@endsection
