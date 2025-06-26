


@extends('layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
  <style>
    body { font-family: Tahoma, sans-serif; margin: 0; background: #fafafa; }
    .navbar { background: #ff0077; padding: 1rem; color: white; font-size: 1.2rem; text-align: center; }
    .container { max-width: 900px; margin: auto; padding: 2rem; }
    .section { margin-bottom: 3rem; }
    h2 { margin-bottom: 1rem; color: #333; }
    .btn { padding: 10px 20px; background: #ff0077; color: white; border: none; cursor: pointer; border-radius: 8px; }
    .card { background: white; padding: 1rem; border: 1px solid #ddd; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 0 5px #ccc; }
    footer { background: #333; color: white; padding: 1rem; text-align: center; width: 100%; position: fixed; bottom: 0; left: 0; }
  </style>
<div class="container">
  <!-- ✅ Hero -->
  <div class="section">
    <h1>مرحبًا بك في Beauty Booking</h1>
    <button class="btn" data-gtm-event="click_button" data-gtm-label="hero_button">احجز الآن</button>
  </div>

  <!-- ✅ Offers -->
  <div class="section">
    <h2>عروض مميزة</h2>
    <div class="card" data-gtm-event="click_offer" data-gtm-label="offer_1">عرض: خصم 30% على الحجز الأول</div>
    <div class="card" data-gtm-event="click_offer" data-gtm-label="offer_2">عرض: جلسة مجانية عند حجز 3</div>
  </div>

  <!-- ✅ Products -->
  <div class="section">
    <h2>منتجات مميزة</h2>
    <div class="card" data-gtm-event="click_product" data-gtm-label="product_1">منتج: شامبو طبيعي</div>
    <div class="card" data-gtm-event="click_product" data-gtm-label="product_2">منتج: زيت الأرجان</div>
  </div>

  <!-- ✅ Salons -->
  <div class="section">
    <h2>صالونات مميزة</h2>
    <div class="card" data-gtm-event="click_salon" data-gtm-label="salon_1">صالون: لمسة الجمال - القاهرة</div>
    <div class="card" data-gtm-event="click_salon" data-gtm-label="salon_2">صالون: صالون النجمات - الإسكندرية</div>
  </div>
</div>
<div class="section">
    <h2>صالونات مميزة</h2>
    <div class="card" data-gtm-event="click_salon" data-gtm-label="salon_1">صالون: لمسة الجمال - القاهرة</div>
    <div class="card" data-gtm-event="click_salon" data-gtm-label="salon_2">صالون: صالون النجمات - الإسكندرية</div>
  </div>
</div>

<div class="section">
    <h2>صالونات مميزة</h2>
    <div class="card" data-gtm-event="click_salon" data-gtm-label="salon_1">صالون: لمسة الجمال - القاهرة</div>
    <div class="card" data-gtm-event="click_salon" data-gtm-label="salon_2">صالون: صالون النجمات - الإسكندرية</div>
  </div>
</div>

<div class="section">
    <h2>صالونات مميزة</h2>
    <div class="card" data-gtm-event="click_salon" data-gtm-label="salon_1">صالون: لمسة الجمال - القاهرة</div>
    <div class="card" data-gtm-event="click_salon" data-gtm-label="salon_2">صالون: صالون النجمات - الإسكندرية</div>
  </div>
</div>


<footer>
  © 2025 Beauty Booking. جميع الحقوق محفوظة.
</footer>
@endsection
