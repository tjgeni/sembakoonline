@extends('layouts.app')
@section('title', 'Home')
@section('content')

{{-- Hero --}}
<div class="p-5 mb-4 bg-success text-white rounded-3">
    <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold">
            <i class="bi bi-basket2-fill"></i> FoodMart
        </h1>
        <p class="col-md-8 fs-5">Belanja sembako berkualitas, harga terjangkau, diantar ke pintu rumahmu.</p>
        <a href="/produk" class="btn btn-light btn-lg fw-bold">
            <i class="bi bi-shop"></i> Lihat Semua Produk
        </a>
    </div>
</div>
{{-- Produk Terbaru --}}
<h4 class="fw-bold mb-3">Produk Terbaru</h4>
@if($products->isEmpty())
<div class="alert alert-info">Belum ada produk tersedia.</div>
@else
<div class="row row-cols-2 row-cols-md-4 g-3">
    @foreach($products as $product)
    <div class="col">
        <div class="card h-100 shadow-sm">
            @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                style="height:160px;object-fit:cover;"
                onerror="this.src='https://via.placeholder.com/300x160?text=No+Image'">
            @else
            <img src="https://via.placeholder.com/300x160?text=No+Image" class="card-img-top"
                style="height:160px;object-fit:cover;"> @endif
            <div class="card-body p-2">
                <p class="card-text small text-muted mb-1">{{ $product->category->name ?? '-' }}</p>
                <h6 class="card-title mb-1" style="font-size:.9rem;">{{ $product->name }}</h6>
                <p class="fw-bold text-success mb-2">Rp {{ number_format($product->price,0,',','.') }}</p>
                <a href="/produk/{{ $product->id }}" class="btn btn-outline-success  btn-sm w-100">
                    <i class="bi bi-eye"></i> Detail
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection