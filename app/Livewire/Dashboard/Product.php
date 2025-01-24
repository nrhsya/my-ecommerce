<?php

namespace App\Livewire\Dashboard;

use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use Livewire\Component;

class Product extends Component
{
    public $categories;

    public $colors;

    public $sizes;

    public function render()
    {
        return view('livewire.dashboard.product');
    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->colors = Color::all();
        $this->sizes = Size::all();
    }
}
