@extends('layouts.app')

@section('title', 'المنتجات')

@section('content')
    <h1 class="mb-4">المنتجات المتوفرة</h1>

    @foreach($products as $product)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text"><strong>السعر:</strong> {{ $product->price }} جنيه</p>
            </div>
        </div>
    @endforeach
@endsection
