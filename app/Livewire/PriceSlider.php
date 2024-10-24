<?php

namespace App\Livewire;

use Livewire\Component;

class PriceSlider extends Component
{
    public $minPrice = 0;
    public $maxPrice = 1000;
    public $selectedMin = 0;
    public $selectedMax = 1000;

    public function mount($minPrice = 0, $maxPrice = 1000)
    {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
        $this->selectedMin = $minPrice;
        $this->selectedMax = $maxPrice;
    }

    public function updated($field)
    {
        if (in_array($field, ['selectedMin', 'selectedMax'])) {
            $this->emitUp('priceRangeUpdated', $this->selectedMin, $this->selectedMax);
        }
    }

    public function render()
    {
        return view('livewire.price-slider');
    }
}
