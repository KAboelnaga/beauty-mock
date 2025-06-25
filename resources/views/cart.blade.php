@extends('layouts.app')

@section('title', 'سلة المشتريات')

@section('content')
<div class="container mt-5">
    <h1>🛒 سلة المشتريات</h1>

    @if(session('cart') && count(session('cart')) > 0)
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>العرض</th>
                    <th>السعر</th>
                    <th>الخصم</th>
                    <th>السعر بعد الخصم</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach(session('cart') as $item)
                    @php
                        $discount = $item->price * $item->discount / 100;
                        $final = $item->price - $discount;
                        $total += $final;
                    @endphp
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->price }} جنيه</td>
                        <td>{{ $item->discount }}%</td>
                        <td>{{ number_format($final, 2) }} جنيه</td>
                        <td>
                            <form action="{{ route('cart.remove', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">🗑 حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-end">
            <h4>الإجمالي: <strong>{{ number_format($total, 2) }} جنيه</strong></h4>
            <a href="#" class="btn btn-success mt-2">إتمام الشراء</a>
        </div>
    @else
        <div class="alert alert-info mt-4">
            لا توجد عناصر في السلة حالياً.
        </div>
    @endif
</div>
@endsection
