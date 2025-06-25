@extends('layouts.app')

@section('content')
    <h2>🛒 سلة المشتريات</h2>

    @forelse ($cartItems as $item)
        <div class="card mb-2">
            <div class="card-body">
                <h5>{{ $item->offer->title }}</h5>
                <p>الكمية: {{ $item->quantity }}</p>
                <p>السعر: {{ $item->offer->price * $item->quantity }} جنيه</p>
            </div>
        </div>
    @empty
        <p>لا يوجد عناصر في السلة.</p>
    @endforelse

    <a href="{{ route('cart.checkout') }}" class="btn btn-success">إتمام الشراء</a>
@endsection
