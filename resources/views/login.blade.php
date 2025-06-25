@extends('layouts.app')

@section('title', 'تسجيل الدخول')

@section('content')
<div class="container mt-5" style="max-width: 500px">
    <h1 class="mb-4 text-center">تسجيل الدخول</h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="example@example.com" required>
        </div>
        <div class="form-group mb-3">
            <label for="password">كلمة المرور</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="********" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">دخول</button>
    </form>
</div>
@endsection
