@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>عروضنا</h1>
        <div class="row">
            @foreach($offers as $offer)
                <div class="offer">
                    <h3>{{ $offer->title }}</h3>
                    <p>{{ Str::limit($offer->description, 100) }}</p>
                    <p><strong>{{ $offer->price }} جنيه</strong></p>
                    
                    <!-- زر عرض التفاصيل -->
                    <a href="{{ route('offer.details', $offer->id) }}" class="btn btn-primary">عرض التفاصيل</a>

                    <!-- زر أضف إلى السلة (كـ POST) -->
                    <form action="{{ route('cart.add', ['offerId' => $offer->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-success">🛒 أضف إلى السلة</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
