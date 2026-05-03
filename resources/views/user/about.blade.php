@extends('layouts.app')
@section('title', 'About Us')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        {{-- Hero About --}}
        <div class="card border-0 shadow-sm mb-4 overflow-hidden">
            <div class="card-body p-0">
                <div class="bg-success text-white p-5 text-center">
                    <i class="bi bi-basket2-fill" style="font-size:3rem;"></i>
                    <h2 class="fw-bold mt-2 mb-1">FoodMart</h2>
                    <p class="mb-0 opacity-75">Toko Sembako Online Terpercaya</p>
                </div>
            </div>
        </div>
        {{-- Tentang Kami --}}
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-4">
                <h5 class="fw-bold text-success mb-3">
                    <i class="bi bi-info-circle-fill me-2"></i>Tentang Kami
                </h5>
                <p class="text-muted">
                    FoodMart adalah platform belanja sembako online yang hadir untuk
                    memudahkan
                    masyarakat mendapatkan kebutuhan pokok sehari-hari dengan mudah,
                    cepat, dan
                    terpercaya. Kami menyediakan berbagai produk sembako berkualitas
                    dengan harga
                    yang terjangkau langsung dari distributor.
                </p>
                <p class="text-muted mb-0">
                    Didirikan dengan semangat melayani, FoodMart berkomitmen untuk
                    memberikan
                    pengalaman belanja yang menyenangkan dengan layanan pengiriman yang
                    cepat
                    dan aman ke seluruh wilayah.
                </p>
            </div>
        </div>
        {{-- Info Kontak --}}
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-4">
                <h5 class="fw-bold text-success mb-3">
                    <i class="bi bi-geo-alt-fill me-2"></i>Informasi Toko
                </h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-success bg-opacity-10 rounded p-2">
                                <i class="bi bi-geo-alt-fill text-success fs-5"></i>
                            </div>
                            <div>

                                <div class="fw-semibold">Alamat</div>

                                <div class="text-muted small">Jl. Sembako Jaya No.

                                    1<br>Jakarta Selatan, 12345</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-success bg-opacity-10 rounded p-2">
                                <i class="bi bi-telephone-fill text-success fs-5"></i>
                            </div>
                            <div>

                                <div class="fw-semibold">Telepon</div>

                                <div class="text-muted small">(021) 1234-5678<br>+62

                                    812-3456-7890</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-success bg-opacity-10 rounded p-2">
                                <i class="bi bi-clock-fill text-success fs-5"></i>
                            </div>
                            <div>

                                <div class="fw-semibold">Jam Operasional</div>
                                <div class="text-muted small">Senin - Sabtu<br>08.00 -

                                    20.00 WIB</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-success bg-opacity-10 rounded p-2">
                                <i class="bi bi-envelope-fill text-success fs-5"></i>
                            </div>
                            <div>

                                <div class="fw-semibold">Email</div>
                                <div class="text-muted
small">admin@foodmart.id<br>cs@foodmart.id</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Visi Misi --}}
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h6 class="fw-bold text-success mb-2">
                            <i class="bi bi-eye-fill me-2"></i>Visi
                        </h6>

                        <p class="text-muted small mb-0">

                            Menjadi platform belanja sembako online terpercaya dan
                            terjangkau
                            yang menjangkau seluruh lapisan masyarakat Indonesia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h6 class="fw-bold text-success mb-2">
                            <i class="bi bi-bullseye me-2"></i>Misi
                        </h6>

                        <ul class="text-muted small mb-0 ps-3">

                            <li>Menyediakan produk sembako berkualitas</li>
                            <li>Harga transparan dan terjangkau</li>
                            <li>Pengiriman cepat dan aman</li>
                            <li>Layanan pelanggan yang ramah</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="/contact" class="btn btn-success px-4">
                <i class="bi bi-envelope me-2"></i>Hubungi Kami
            </a>
            <a href="/produk" class="btn btn-outline-success px-4 ms-2">
                <i class="bi bi-shop me-2"></i>Lihat Produk
            </a>
        </div>
    </div>
</div>
@endsection