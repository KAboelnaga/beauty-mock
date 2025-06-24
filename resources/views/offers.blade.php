@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>عروضنا</h1>
        <div class="row">
            @foreach ($offers as $offer)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $offer->title }}</h5>
                            <p class="card-text">{{ $offer->description }}</p>
                            @if ($offer->discount)
                                <p class="card-text"><strong>خصم: </strong>{{ $offer->discount }}%</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
