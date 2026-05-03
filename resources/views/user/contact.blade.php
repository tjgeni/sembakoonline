@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <h4 class="fw-bold text-success mb-1">
                    <i class="bi bi-envelope-fill me-2"></i>Hubungi Admin
                </h4>
                <p class="text-muted mb-4">
                    Punya pertanyaan atau keluhan? Kirim pesan ke admin FoodMart.
                </p>
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <i class="bi bi-check-circle-fill me-2"></i>{{
                    session('success') }}

                    <button type="button" class="btn-close" data-bs- dismiss="alert"></button>

                </div>
                @endif
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="/contact">
                    @csrf

                    <div class="mb-3">

                        <label class="form-label fw-semibold">Nama</label>
                        <input type="text" class="form-control bg-light" value="{{ Auth::user()->name }}" disabled>
                        <div class="form-text">Pesan dikirim atas nama akun kamu.</div>
                    </div>

                    <div class="mb-3">

                        <label class="form-label fw-semibold">Subjek <span class="text-
danger">*</span></label>

                        <input type="text" name="subject" class="form-control @error('subject') is-invalid
@enderror" value="{{ old('subject') }}" placeholder="Misal: Pertanyaan tentang pesanan saya">

                        @error('subject')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">

                        <label class="form-label fw-semibold">Pesan <span class="text-
danger">*</span></label>
                        <textarea name="body" rows="5" class="form-control @error('body') is-invalid
@enderror" placeholder="Tulis pesanmu di sini...">{{ old('body')
}}</textarea>
                        @error('body')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi bi-send-fill me-2"></i>Kirim Pesan
                    </button>

                    <a href="/home" class="btn btn-outline-secondary px-4 ms-
2">Batal</a>

                </form>
            </div>
        </div>
        {{-- Info kontak singkat --}}
        <div class="card border-0 shadow-sm mt-3">
            <div class="card-body p-3">
                <div class="row text-center g-2">
                    <div class="col-4">
                        <i class="bi bi-telephone-fill text-success"></i>
                        <div class="small text-muted">(021) 1234-5678</div>
                    </div>

                    <div class="col-4">

                        <i class="bi bi-envelope-fill text-success"></i>
                        <div class="small text-muted">admin@foodmart.id</div>
                    </div>

                    <div class="col-4">

                        <i class="bi bi-clock-fill text-success"></i>
                        <div class="small text-muted">08.00 - 20.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection