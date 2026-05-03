@extends('layouts.admin')
@section('title', 'Tambah Kategori')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="fw-bold mb-0">
                    <i class="bi bi-plus-circle text-success me-2"></i>Tambah Kategori
                </h5>
            </div>
            <div class="card-body p-4">
                @if($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div> @endif
                <form method="POST" action="{{ route('admin.categories.store') }}"> @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Kategori <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" placeholder="Misal: Beras, Minyak Goreng, Gula">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success px-4"> <i class="bi bi-check-lg me-1"></i>Simpan
                        </button>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection