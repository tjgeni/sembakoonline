@extends('layouts.admin')
@section('title', 'Edit Kategori')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="fw-bold mb-0">
                    <i class="bi bi-pencil-square text-success me-2"></i>Edit Kategori
                </h5>
            </div>
            <div class="card-body p-4">
                @if($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div> @endif
                <form method="POST" action="{{ route('admin.categories.update',  $category) }}">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Kategori <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name', $category->name) }}"> @error('name')
                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success px-4"> <i class="bi bi-check-lg me-1"></i>Update
                        </button>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection