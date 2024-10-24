<?php

namespace App\Livewire\Vehicles;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $brand;
    public $model;
    public $year;
    public $price;
    public $keywords;
    public $category;
    public $minPrice;
    public $maxPrice;

    protected $listeners = ['priceRangeUpdated' => 'updatePriceRange'];

    public function mount()
    {
        $this->brand = request()->get('brand');
        $this->model = request()->get('model');
        $this->year = request()->get('year');
        $this->price = request()->get('price');
        $this->keywords = request()->get('keywords');
        $this->category = request()->get('category');
    }

    public function updatePriceRange($min, $max)
    {
        $this->minPrice = $min;
        $this->maxPrice = $max;
        // Realiza las acciones necesarias con los nuevos rangos de precios
    }




    #[Layout('layouts.app')]
    public function render() : View
    {
        return view('livewire.vehicles.index');
    }
}
