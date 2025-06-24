@extends('layouts.app')

@section('title', 'اتصل بنا')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">اتصل بنا</h1>

    <p>نحن هنا لمساعدتك! إذا كان لديك أي استفسار أو مشكلة، لا تتردد في التواصل معنا.</p>

    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">الاسم</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="اسمك الكامل">
        </div>

        <div class="form-group mb-3">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="example@example.com">
        </div>

        <div class="form-group mb-3">
            <label for="message">رسالتك</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="اكتب رسالتك هنا..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary">إرسال</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection
