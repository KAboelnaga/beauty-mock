@extends('layouts.app')

@section('title', $offer->title)

@section('content')
<div class="container mt-5">
    <h1>{{ $offer->title }}</h1>

    <p>{{ $offer->description }}</p>
    <p><strong>السعر:</strong> {{ $offer->price }} جنيه</p>
    <p><strong>الخصم:</strong> {{ $offer->discount }}%</p>

    @php
        $finalPrice = $offer->price - ($offer->price * $offer->discount / 100);
    @endphp
    <p><strong>السعر بعد الخصم:</strong> {{ number_format($finalPrice, 2) }} جنيه</p>

    <!-- أزرار الشراء -->
    <div class="mt-4">
        <form action="{{ route('cart.add', ['offerId' => $offer->id]) }}" method="POST" style="display:inline-block;">
            @csrf
            <button type="submit" class="btn btn-secondary">أضف إلى السلة</button>
        </form>

        <form action="{{ route('checkout.direct', ['id' => $offer->id]) }}" method="POST" style="display:inline-block; margin-right:10px;">
            @csrf
            <button type="submit" class="btn btn-primary">اشترِ الآن</button>
        </form>
    </div>
</div>
@endsection
