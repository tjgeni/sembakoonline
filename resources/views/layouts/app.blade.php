<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodMart — @yield('title', 'Toko Sembako Online')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: 700;
            color: #1B7A3E !important;
        }

        .btn-primary {
            background-color: #1B7A3E;
            border-color: #1B7A3E;
        }

        .btn-primary:hover {
            background-color: #145c2e;
            border-color: #145c2e;
        }

        .badge-cart {
            font-size: 0.65rem;
        }

        footer {
            background-color: #1B7A3E;
            color: white;
        }
    </style>
    @stack('styles')
</head>

<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a cl ass="navbar-brand" href="/home">
                <i class="bi bi-basket2-fill text-success"></i> FoodMart </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('home') ? 'fw-bold text success' : '' }}"
                            href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('produk*') ? 'fw-bold text success' : '' }}"
                            href="/produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'fw-bold text success' : '' }}"
                            href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'fw-bold text success' : '' }}"
                            href="/contact">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item me-2">
                        <a class="nav-link {{ request()->is('cart') ? 'fw-bold text success' : '' }}" href="/cart">
                            <i class="bi bi-cart3"></i> Keranjang
                            @php $cartCount = collect(session('cart', []))->sum('qty');
                            @endphp
                            @if($cartCount > 0)
                            <span class="badge bg-danger rounded-pill badge-cart">{{ $cartCount }}</span>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link {{ request()->is('orders*') ? 'fw-bold text success' : '' }}" href="/orders">
                            <i class="bi bi-bag-check"></i> Pesanan Saya </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> {{ Auth::user()->name }} </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <form action="/logout" method="POST"> @csrf
                                    <button class="dropdown-item text-danger" type="submit">
                                        <i class="bi bi-box-arrow-right"></i> Logout </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- FLASH MESSAGES --}}
    <div class="container mt-3">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert"> <i
                class="bi bi-check-circle-fill"></i> {{ session('success') }} <button type="button" class="btn-close"
                data-bs-dismiss="alert"></button> </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert"> <i
                class="bi bi-exclamation-triangle-fill"></i> {{ session('error') }} <button type="button"
                class="btn-close" data-bs-dismiss="alert"></button> </div>
        @endif
    </div>
    {{-- CONTENT --}}
    <main class="container my-4">
        @yield('content')
    </main>
    {{-- FOOTER --}}
    <footer class="py-3 mt-5">
        <div class="container text-center">
            <small>&copy; {{ date('Y') }} FoodMart — Toko Sembako Online. All rights reserved.</small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
    @stack('scripts')
</body>

</html>