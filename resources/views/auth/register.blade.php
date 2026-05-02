<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register — FoodMart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap icons.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min height:100vh;">
            <div class="col-md-6 col-lg-5">
                <div class="text-center mb-4">
                    <h2 class="fw-bold text-success">
                        <i class="bi bi-basket2-fill"></i> FoodMart
                    </h2>
                    <p class="text-muted">Daftar Akun Baru</p>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Registrasi</h5>
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error) <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form method="POST" action="/register">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label> <input type="text" name="name" class="form-control  
@error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nama kamu" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label> <input type="email" name="email" class="form-control  
@error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="email@contoh.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label> <input type="password" name="password"
                                    class="form-control" placeholder="Min. 6 karakter" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Konfirmasi Password</label> <input type="password"
                                    name="password_confirmation" class="form-control" placeholder="Ulangi password"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">
                                <i class="bi bi-person-check"></i> Daftar Sekarang </button>
                        </form>
                        <hr>
                        <p class="text-center text-muted mb-0" style="font-size:.9rem;">
                            Sudah punya akun?
                            <a href="/login" class="text-success fw-bold">Login di sini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        </sc ript> 
</body> 
</html>