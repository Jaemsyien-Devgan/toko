<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Products Detail')]
class ProductDetailPage extends Component
{
    public $sluq;

    public function mount($slug){
        $this->sluq = $slug;
    }
    public function render()
    {
        return view('livewire.product-detail-page',[
            'product' => Product::where('slug', $this->sluq)->firstorFail()
        ]);

    }
}
