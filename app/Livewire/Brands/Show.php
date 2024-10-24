<?php

namespace App\Livewire\Brands;

use App\Livewire\Forms\BrandForm;
use App\Models\Brand;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public BrandForm $form;

    public function mount(Brand $brand)
    {
        $this->form->setBrandModel($brand);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.brand.show', ['brand' => $this->form->brandModel]);
    }
}
