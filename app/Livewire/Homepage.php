<?php

namespace App\Livewire;

use App\Livewire\Partials\Brands;
use App\Models\Brand;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home page - Devshop')]
class Homepage extends Component
{
    public function render()
    {
        $brands = Brand::where('is_active', 1)->get();
        $categories = Category::where('is_active', 1)->get();
        return view('livewire.homepage',[
            'brands' => $brands,
            'categories' => $categories
        ]);
    }
}
