@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>تأكيد الطلب</h4>
    </div>
    <div class="card-body">
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <ul class="list-group mb-3">
            @foreach ($cartItems as $item)
                <li class="list-group-item d-flex justify-content-between">
                    <div>{{ $item->offer->title }} ({{ $item->quantity }})</div>
                    <div>{{ $item->offer->price * $item->quantity }} ج.م</div>
                </li>
            @endforeach
        </ul>

        <h5 class="text-end">الإجمالي: <strong>{{ $total }} ج.م</strong></h5>

        <form method="POST" action="{{ route('cart.process') }}">
            @csrf
            <button class="btn btn-success mt-3 w-100">تأكيد الطلب</button>
        </form>
    </div>
</div>
@endsection
