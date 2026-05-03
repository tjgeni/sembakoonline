@extends('layouts.admin')
@section('title', 'Produk')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">
        <i class="bi bi-box-seam text-success me-2"></i>Data Produk
    </h4>
    <a href="{{ route('admin.products.create') }}" class="btn btn-success"> <i class="bi bi-plus-lg me-1"></i>Tambah
        Produk
    </a>
</div>
<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        @if($products->isEmpty())
        <div class="text-center py-5 text-muted">
            <i class="bi bi-box-seam fs-1"></i>
            <p class="mt-2">Belum ada produk.</p>
        </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th width="50">#</th>
                        <th width="80">Foto</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th class="text-center">Stok</th>
                        <th class="text-center" width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $i => $product)
                    <tr>
                        <td>{{ ($products->currentPage()-1) * $products->perPage() + $i + 1 }}</td>
                        <td>
                            @if($product->image)
                            <img src="{{ asset('storage/' . $product->image)  }}" class="rounded" width="55" height="55"
                                style="object-fit:cover;" onerror="this.src='https://via.placeholder.com/55?text=?'">
                            @else
                            <div class="bg-light rounded d-flex align-items center justify-content-center"
                                style="width:55px;height:55px;"> <i class="bi bi-image text-muted"></i> </div>
                            @endif
                        </td>
                        <td>
                            <div class="fw-semibold">{{ $product->name }}</div> <small class="text-muted">{{
                                Str::limit($product->description, 40) }}</small>
                        </td>
                        <td>
                            <span class="badge bg-success bg-opacity-10 text success border border-success-subtle">
                                {{ $product->category->name ?? '-' }} </span>
                        </td>
                        <td class="fw-semibold">Rp {{ number_format($product->price,0,',','.') }}</td>
                        <td class="text-center">
                            @if($product->stock <= 0) <span class="badge bg-danger">Habis</span> @elseif($product->stock
                                <= 10) <span class="badge bg-warning text-dark">{{ $product->stock }}</span>
                                    @else
                                    <span class="badge bg-success">{{ $product->stock }}</span>
                                    @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('admin.products.edit', $product) }}"
                                class="btn btn-sm btn-outline-primary me-1"> <i class="bi bi-pencil"></i> Edit </a>
                            <form action="{{ route('admin.products.destroy',  $product) }}" method="POST"
                                class="d-inline" onsubmit="return confirm('Yakin hapus produk  ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-3">
            {{ $products->links() }}
        </div>
        @endif
    </div>
</div>
@endsection