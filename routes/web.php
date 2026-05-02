<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// ── Redirect root ──────────────────────────────────────
Route::get('/', fn () => redirect('/login'));
// ── Auth ───────────────────────────────────────────────
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ── User routes ────────────────────────────────────────
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Route::get('/about', [AboutController::class, 'index'])->name('about');
    // Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    // Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    // Route::get('/produk', [UserProductController::class, 'index'])->name('produk.index');
    // Route::get('/produk/{product}', [UserProductController::class, 'show'])->name('produk.show');

    // Cart
    // Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    // Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    // Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    // Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

    // // Checkout & Orders
    // Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    // Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
    // Route::get('/orders', [UserOrderController::class, 'index'])->name('orders.index');
    // Route::get('/orders/{order}', [UserOrderController::class, 'show'])->name('orders.show');
});

// ── Admin routes ───────────────────────────────────────
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::resource('categories', CategoryController::class);
    // Route::resource('products', ProductController::class);
    // Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index');
    // Route::get('/orders/{order}', [AdminOrderController::class, 'show'])->name('orders.show');
    // Route::patch('/orders/{order}/status', [AdminOrderController::class,
    //     'updateStatus'])->name('orders.updateStatus');
    // Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // Route::get('/messages', [AdminMessageController::class, 'index'])->name('messages.index');
});
