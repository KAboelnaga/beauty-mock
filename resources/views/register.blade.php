@extends('layouts.app')

@section('title', 'تسجيل حساب جديد')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">تسجيل حساب جديد</h1>

    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">الاسم</label>
            <input type="text" class="form-control" id="name" name="name" required placeholder="اسمك الكامل">
        </div>
        <div class="form-group mb-3">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" class="form-control" id="email" name="email" required placeholder="example@example.com">
        </div>
        <div class="form-group mb-3">
            <label for="password">كلمة المرور</label>
            <input type="password" class="form-control" id="password" name="password" required placeholder="••••••••">
        </div>
        <div class="form-group mb-3">
            <label for="password_confirmation">تأكيد كلمة المرور</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="••••••••">
        </div>
        <button type="submit" class="btn btn-success">تسجيل</button>
    </form>

    <div class="mt-3">
        <a href="{{ route('login') }}">لديك حساب بالفعل؟ سجل الدخول</a>
    </div>
</div>
@endsection
