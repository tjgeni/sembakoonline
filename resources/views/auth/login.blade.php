<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — FoodMart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap icons.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min height:100vh;">
            <div class="col-md-5 col-lg-4">
                <div class="text-center mb-4">
                    <h2 class="fw-bold text-success">
                        <i class="bi bi-basket2-fill"></i> FoodMart
                    </h2>
                    <p class="text-muted">Toko Sembako Online</p>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Login</h5>
                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div> @endif
                        @if($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div> @endif
                        <form method="POST" action="/login">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Email</label> <input type="email" name="email" class="form-control  
@error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="email@contoh.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label> <input type="password" name="password"
                                    class="form-control" placeholder="••••••" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">
                                <i class="bi bi-box-arrow-in-right"></i> Login </button>
                        </form>
                        <hr>
                        <p class="text-center text-muted mb-0" style="font-size:.9rem;">
                            Belum punya akun?
                            <a href="/register" class="text-success fw-bold">Daftar di
                                sini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Halaman 10
    FoodMart Laravel | Fase 2 — Auth (Register, Login, Logout, Middleware)
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        </sc ript> 
</body> 
</html>