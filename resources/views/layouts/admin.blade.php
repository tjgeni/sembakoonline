<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin FoodMart — @yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f5f9;
        }

        .sidebar {
            min-height: 100vh;
            background: #0D1B2A;
        }

        .sidebar .nav-link {
            color: #adb5bd;
            padding: .6rem 1rem;
            border-radius: 6px;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: #1B7A3E;
            color: #fff;
        }

        .sidebar .brand {
            color: #F4A226;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .main-content {
            min-height: 100vh;
        }
    </style>
    @stack('styles')
</head>

<body>
    <div class="d-flex">
        {{-- SIDEBAR --}}
        <div class="sidebar p-3" style="width:230px; min-width:230px;">
            <div class="brand mb-4 ps-2">
                <i class="bi bi-basket2-fill"></i> FoodMart
                <div style="font-size:.7rem;color:#6c757d;font-weight:400;">Admin Panel</div>
            </div>
            <nav class="nav flex-column gap-1">
                <a href="/admin/dashboard" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
                <a href="/admin/categories" class="nav-link {{ request()->is('admin/categories*') ? 'active' : '' }}">
                    <i class="bi bi-tags me-2"></i> Kategori
                </a>
                <a href="/admin/products" class="nav-link {{ request()->is('admin/products*') ? 'active' : '' }}">
                    <i class="bi bi-box-seam me-2"></i> Produk
                </a>
                <a href="/admin/orders" class="nav-link {{ request()->is('admin/orders*') ?  'active' : '' }}">
                    <i class="bi bi-bag-check me-2"></i> Pesanan
                </a>
                <a href="/admin/users" class="nav-link {{ request()->is('admin/users*') ?  'active' : '' }}">
                    <i class="bi bi-people me-2"></i> Users
                </a>
                <a href="/admin/messages" class="nav-link {{ request()->is('admin/messages*') ? 'active' : '' }}">
                    <i class="bi bi-envelope me-2"></i> Pesan
                </a>
                <hr style="border-color:#2d3748;">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="nav-link border-0 bg-transparent text-danger w-100 text start">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout </button>
                </form>
            </nav>
        </div>
        {{-- MAIN --}}
        <div class="main-content flex-grow-1 p-4">
            {{-- Flash --}}
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show"> <i class="bi bi-check-circle-fill"></i> {{
                session('success') }} <button type="button" class="btn-close" data-bs dismiss="alert"></button>
            </div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show"> <i class="bi bi-exclamation-triangle-fill"></i>
                {{ session('error') }} <button type="button" class="btn-close" data-bs dismiss="alert"></button>
            </div>
            @endif
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        </sc ript> 
@stack('scripts') 
</body> 
</html>