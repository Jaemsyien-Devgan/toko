<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Products Detail')]
class ProductDetailPage extends Component
{
    use LivewireAlert;

    public $sluq;
    public $quantity = 1;

    public function mount($slug){
        $this->sluq = $slug;
    }

    public function increaseQty(){
        $this->quantity++;
    }

    public function decreaseQty(){
        if($this->quantity > 1){
            $this->quantity--;
        }
    }

    public function addToCart($product_id){
        $total_count = CartManagement::addItemToCartWithQty($product_id, $this->quantity);
        
        $this->dispatch('UpdateCartCount', total_count: $total_count)->to(Navbar::class);

        $this->alert('success', 'Product added to cart successfully',[
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true
        ]);
    }
    public function render()
    {
        return view('livewire.product-detail-page',[
            'product' => Product::where('slug', $this->sluq)->firstorFail()
        ]);

    }
}
