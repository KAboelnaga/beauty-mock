@extends('layouts.app')

@section('title', 'الدفع')

@section('content')
<div class="container mt-5">
    <h1>شراء مباشر</h1>

    <p><strong>العرض:</strong> {{ $offer->title }}</p>
    <p><strong>السعر:</strong> {{ $offer->price }} جنيه</p>
    <p><strong>الخصم:</strong> {{ $offer->discount }}%</p>

    @php
        $finalPrice = $offer->price - ($offer->price * $offer->discount / 100);
    @endphp
    <p><strong>السعر بعد الخصم:</strong> {{ number_format($finalPrice, 2) }} جنيه</p>

    <form action="#" method="POST">
        <!-- بيانات الدفع -->
        <button type="submit" class="btn btn-success">إتمام الدفع</button>
    </form>
</div>
@endsection
