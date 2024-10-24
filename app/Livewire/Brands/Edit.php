<?php

namespace App\Livewire\Brands;

use App\Livewire\Forms\BrandForm;
use App\Models\Brand;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public BrandForm $form;

    public function mount(Brand $brand)
    {
        $this->form->setBrandModel($brand);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('brands.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.brand.edit');
    }
}
