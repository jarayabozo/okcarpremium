<?php

namespace App\Livewire\Brands;

use App\Models\Brand;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.admin')]
    public function render(): View
    {
        $brands = Brand::paginate();

        return view('livewire.brand.index', compact('brands'))
            ->with('i', $this->getPage() * $brands->perPage());
    }

    public function delete(Brand $brand)
    {
        $brand->delete();

        return $this->redirectRoute('brands.index', navigate: true);
    }
}
