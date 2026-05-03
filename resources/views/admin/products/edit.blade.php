@extends('layouts.admin')
@section('title', 'Edit Produk')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="fw-bold mb-0">
                    <i class="bi bi-pencil-square text-success me-2"></i>Edit Produk
                </h5>
            </div>
            <div class="card-body p-4">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('admin.products.update', $product)  }}"
                    enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label class="form-label fw-semibold">Nama Produk <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $product->name) }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Kategori <span class="text-danger">*</span></label>
                            <select name="category_id" class="form-select">
                                <option value="">-- Pilih --</option> @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ old('category_id', $product->category_id) == $cat->id
                                    ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Harga (Rp)</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span> <input type="number" name="price"
                                    class="form-control" value="{{ old('price', $product->price) }}" min="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Stok</label> <input type="number" name="stock"
                                class="form-control" value="{{ old('stock', $product->stock) }}" min="0">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Deskripsi</label> <textarea name="description"
                                rows="3" class="form control">{{ old('description', $product->description) }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Foto Produk</label> @if($product->image)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $product->image)  }}" class="rounded"
                                    style="max-height:120px;">
                                <div class="form-text">Foto saat ini. Upload baru untuk mengganti.</div>
                            </div>
                            @endif
                            <input type="file" name="image" class="form-control" accept="image/*" id="imageInput">
                            <div class="mt-2">
                                <img id="preview" src="" alt="Preview" class="rounded d-none" style="max-height:120px;">
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success px-4"> <i class="bi bi-check-lg me-1"></i>Update
                            Produk </button>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    document.getElementById('imageInput').addEventListener('change', function(e) {  const preview = document.getElementById('preview'); 
 const file = e.target.files[0]; 
 if (file) { 
 preview.src = URL.createObjectURL(file); 
 preview.classList.remove('d-none'); 
 } 
}); 
</script>
@endpush