<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Beauty Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
</head>
<body style="direction: rtl; background-color: #f8f9fa;">

    {{-- ✅ Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Beauty Booking</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">عنّا</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('offers') }}">العروض</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">المنتجات</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">تواصل معنا</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">الأسئلة</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">تسجيل دخول</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">إنشاء حساب</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ✅ Page Content --}}
    <main class="container">
        @yield('content')
    </main>

    {{-- ✅ Bootstrap Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
