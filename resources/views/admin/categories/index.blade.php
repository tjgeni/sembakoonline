@extends('layouts.admin')
@section('title', 'Kategori')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">
        <i class="bi bi-tags text-success me-2"></i>Kategori Produk
    </h4>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-success"> <i class="bi bi-plus-lg me-1"></i>Tambah
        Kategori
    </a>
</div>
<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        @if($categories->isEmpty())
        <div class="text-center py-5 text-muted">
            <i class="bi bi-tags fs-1"></i>
            <p class="mt-2">Belum ada kategori. Tambahkan sekarang!</p>
        </div>
        @else
        <table class="table table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th width="60">#</th>
                    <th>Nama Kategori</th>
                    <th class="text-center">Jumlah Produk</th>
                    <th class="text-center">Dibuat</th>
                    <th class="text-center" width="180">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $i => $cat)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td class="fw-semibold">{{ $cat->name }}</td>
                    <td class="text-center">
                        <span class="badge bg-success rounded-pill"> {{ $cat->products_count }} produk </span>
                    </td>
                    <td class="text-center text-muted small">
                        {{ $cat->created_at->format('d M Y') }} </td>
                    <td class="text-center">
                        <a href="{{ route('admin.categories.edit', $cat) }}"
                            class="btn btn-sm btn-outline-primary me-1"> <i class="bi bi-pencil"></i> Edit </a>
                        <form action="{{ route('admin.categories.destroy', $cat)  
}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus kategori  
ini?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i> Hapus </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection