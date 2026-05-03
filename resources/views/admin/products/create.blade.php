@extends('layouts.admin')
@section('title', 'Tambah Produk')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="fw-bold mb-0">
                    <i class="bi bi-plus-circle text-success me-2"></i>Tambah Produk
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
                <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label class="form-label fw-semibold">Nama Produk <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid  @enderror"
                                value="{{ old('name') }}" placeholder="Misal: Beras  Premium 5kg">
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Kategori <span class="text-danger">*</span></label>
                            <select name="category_id" class="form-select @error('category_id') is-invalid  @enderror">
                                <option value="">-- Pilih Kategori --</option> @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ old('category_id')==$cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('category_id')<div class="invalid-feedback">{{
                                $message }}</div>@enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Harga (Rp) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span> <input type="number" name="price"
                                    class="form-control @error('price') is-invalid  @enderror"
                                    value="{{ old('price') }}" min="0" placeholder="75000">
                            </div>
                            @error('price')<div class="invalid-feedback">{{ $message
                                }}</div>@enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Stok <span class="text-danger">*</span></label>
                            <input type="number" name="stock" class="form-control @error('stock') is-invalid  @enderror"
                                value="{{ old('stock', 0) }}" min="0"> @error('stock')<div class="invalid-feedback">{{
                                $message }}</div>@enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Deskripsi</label> <textarea name="description"
                                rows="3" class="form-control" placeholder="Deskripsi singkat produk...">{{  
old('description') }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Foto Produk</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid  @enderror"
                                accept="image/*" id="imageInput">
                            <div class="form-text">Format: JPG, PNG, WEBP. Maks 2MB.</div>
                            @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            <div class="mt-2">
                                <img id="preview" src="" alt="Preview" class="rounded d-none" style="max-height:150px;">
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success px-4"> <i class="bi bi-check-lg me-1"></i>Simpan
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