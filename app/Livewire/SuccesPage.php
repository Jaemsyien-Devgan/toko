<?php

namespace App\Livewire;

use App\Models\Order;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Stripe\Checkout\Session;
use Stripe\Stripe;

#[Title('Succes Devshop')]
class SuccesPage extends Component
{

    #[Url]
    public $session_id;

    public function render()
{
    $latest_order = Order::with('address')->where('user_id', Auth::id())->latest()->first();

    // Cek apakah $latest_order tidak null
    if ($latest_order) {
        if ($this->session_id) {
            Stripe::setApiKey('sk_test_51PyOno09JhUSzY8XDdTOWX91etHFOdHrcgkKDjaonr6SeOPRBBXQHoJXYxv9ktKLn2lzNk1qiaubaEotkOC7oYzp003KQ4WY1s');
            $session_info = Session::retrieve($this->session_id);

            if ($session_info->payment_status != 'paid') {
                $latest_order->payment_status = 'failed';
                $latest_order->save();
                return redirect()->route('cancel');
            } else if ($session_info->payment_status == 'paid') {
                $latest_order->payment_status = 'paid';
                $latest_order->save();
            }
        }

        // Jika semua berhasil, tampilkan halaman sukses
        return view('livewire.succes-page', [
            'order' => $latest_order,
        ]);
    } else {
        // Tangani jika tidak ada order terbaru
        return redirect()->back()->withErrors('Tidak ada order terbaru.');
    }
}

}
