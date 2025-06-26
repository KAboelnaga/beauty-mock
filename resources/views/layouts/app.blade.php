<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Beauty Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
</head>
<body style="direction: rtl; background-color: #f8f9fa;">
    @include('partials.gtm')
    @include('partials.gtm-clicks')
    @include('partials.gtm-scroll')
    <pre>
    {{ session('login_status') }}
</pre>
      @if(session('login_status') === 'success')
    dataLayer.push({
      event: 'login_success'
    });
  @elseif(session('login_status') === 'failed')
    dataLayer.push({
      event: 'login_failed'
    });
  @endif
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Beauty Booking</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" data-gtm-event="click_page" data-gtm-label="home" href="{{ route('home') }}">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" data-gtm-event="click_page" data-gtm-label="about" href="{{ route('about') }}">عنّا</a></li>
                    <li class="nav-item"><a class="nav-link" data-gtm-event="click_page" data-gtm-label="offers" href="{{ route('offers') }}">العروض</a></li>
                    <li class="nav-item"><a class="nav-link" data-gtm-event="click_page" data-gtm-label="products" href="{{ route('products') }}">المنتجات</a></li>
                    <li class="nav-item"><a class="nav-link" data-gtm-event="click_page" data-gtm-label="contact" href="{{ route('contact') }}">تواصل معنا</a></li>
                    <li class="nav-item"><a class="nav-link" data-gtm-event="click_page" data-gtm-label="faq" href="{{ route('faq') }}">الأسئلة</a></li>
                    <li class="nav-item"><a class="nav-link" data-gtm-event="click_page" data-gtm-label="login" href="{{ route('login') }}">تسجيل دخول</a></li>
                    <li class="nav-item"><a class="nav-link" data-gtm-event="click_page" data-gtm-label="register" href="{{ route('register') }}">إنشاء حساب</a></li>
                    <li class="nav-item">
    <a class="nav-link" href="{{ route('cart.index') }}">🛒 السلة</a>

</li>
@auth




                </ul>
                <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" data-gtm-event="logout" data-gtm-label="{{ auth()->user()->name }}" class="btn btn-danger">تسجيل الخروج</button>
</form>
@endauth
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
