@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<h4 class="fw-bold mb-4">
    <i class="bi bi-speedometer2 text-success me-2"></i>Dashboard
</h4>
{{-- Stat Cards --}}
<div class="row g-3 mb-4">
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center py-4">
                <i class="bi bi-box-seam text-success" style="font-size:2rem;"></i>
                <h3 class="fw-bold mt-2 mb-0">{{ $totalProduk }}</h3> <small class="text-muted">Total Produk</small>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center py-4">
                <i class="bi bi-tags text-primary" style="font-size:2rem;"></i>
                <h3 class="fw-bold mt-2 mb-0">{{ $totalKategori }}</h3> <small class="text-muted">Total Kategori</small>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center py-4">
                <i class="bi bi-people text-warning" style="font-size:2rem;"></i>
                <h3 class="fw-bold mt-2 mb-0">{{ $totalUser }}</h3> <small class="text-muted">Total User</small>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center py-4">
                <i class="bi bi-bag-check text-danger" style="font-size:2rem;"></i>
                <h3 class="fw-bold mt-2 mb-0">{{ $totalPesanan }}</h3> <small class="text-muted">Total Pesanan</small>
            </div>
        </div>
    </div>
</div>
{{-- Status Pesanan --}}
<div class="row g-3 mb-4">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm">
            <div class="card-body d-flex align-items-center gap-3 py-3">
                <div class="bg-warning bg-opacity-10 rounded p-3"> <i
                        class="bi bi-hourglass-split text-warning fs-4"></i> </div>
                <div>
                    <div class="fw-bold fs-4">{{ $pesananPending }}</div>
                    <div class="text-muted small">Pesanan Pending</div>
                </div>
                <a href="/admin/orders" class="btn btn-sm btn-outline-warning ms auto">Lihat</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card border-0 shadow-sm">
            <div class="card-body d-flex align-items-center gap-3 py-3">
                <div class="bg-success bg-opacity-10 rounded p-3"> <i class="bi bi-check-circle text-success fs-4"></i>
                </div>
                <div>
                    <div class="fw-bold fs-4">{{ $pesananSelesai }}</div>
                    <div class="text-muted small">Pesanan Selesai</div>
                </div>
                <a href="/admin/orders" class="btn btn-sm btn-outline-success ms auto">Lihat</a>
            </div>
        </div>
    </div>
</div>
{{-- Pesanan Terbaru --}}
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white border-bottom py-3">
        <h6 class="fw-bold mb-0">
            <i class="bi bi-clock-history text-success me-2"></i>Pesanan Terbaru
        </h6>
    </div>
    <div class="card-body p-0">
        @if($pesananTerbaru->isEmpty())
        <div class="text-center py-4 text-muted">Belum ada pesanan.</div> @else
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pesananTerbaru as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>Rp {{ number_format($order->total_price,0,',','.') }}</td>
                        <td>
                            @php
                            $badge = match($order->status) { 'pending' => 'warning', 'diproses' => 'primary',
                            'dikirim' => 'info',
                            'selesai' => 'success',
                            default => 'secondary',
                            };
                            @endphp
                            <span class="badge bg-{{ $badge }}">{{ $order->status
                                }}</span>
                        </td>
                        <td>{{ $order->created_at->format('d M Y') }}</td>
                        <td>
                            <a href="/admin/orders/{{ $order->id }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection