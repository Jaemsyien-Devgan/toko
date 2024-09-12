<?php

use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResertPasswordPage;
use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckoutPage;
use App\Livewire\Homepage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\SuccesPage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', Homepage::class)->name('home');
Route::get('/categories', CategoriesPage::class)->name('categories');
Route::get('/products', ProductsPage::class)->name('products');
Route::get('/cart', CartPage::class)->name('cart');
Route::get('/products/{slug}', ProductDetailPage::class);


Route::middleware('guest')->group(function () {
    Route::get('/login', LoginPage::class)->name('login');
    Route::get('/register', RegisterPage::class)->name('register');
    Route::get('/forgot', ForgotPasswordPage::class)->name('forgot');
    Route::get('/reset', ResertPasswordPage::class)->name('reset');
});


Route::middleware('auth')->group(function () {
    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/');
    });
    Route::get('/checkout', CheckoutPage::class);
    Route::get('/my-orders', MyOrdersPage::class);
    Route::get('/my-orders/{order}', MyOrderDetailPage::class);
    Route::get('/success', SuccesPage::class)->name('success');
    Route::get('/cancel', CancelPage::class)->name('cancel');
});

