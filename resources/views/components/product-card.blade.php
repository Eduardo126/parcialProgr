<div class="product-card">
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <span>Price: ${{ $product->price }}</span>
</div>
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Productos</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <x-product-card :product="$product" />
                </div>
            @endforeach
        </div>
    </div>
@endsection
