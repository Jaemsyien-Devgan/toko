<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title ('My Orders')]
class MyOrdersPage extends Component
{

    use WithPagination;

    public function render()
{
    $perPage = 5;
    $page = request()->get('page', 1); // Mendapatkan halaman saat ini
    $my_orders = Order::where('user_id', Auth::user()->id)
                      ->latest()
                      ->skip(($page - 1) * $perPage) // Skip sesuai halaman
                      ->take($perPage)               // Batas data per halaman
                      ->get();

    $totalOrders = Order::where('user_id', Auth::user()->id)->count(); // Jumlah total order
    $totalPages = ceil($totalOrders / $perPage); // Total halaman

    return view('livewire.my-orders-page', [
        'orders' => $my_orders,
        'totalPages' => $totalPages,
        'currentPage' => $page,
    ]);
}

}
