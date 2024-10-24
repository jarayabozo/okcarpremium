<?php

namespace App\Livewire\Forms;

use App\Models\Brand;
use Livewire\Form;

class BrandForm extends Form
{
    public ?Brand $brandModel;
    
    public $name = '';
    public $slug = '';

    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'slug' => 'required|string',
        ];
    }

    public function setBrandModel(Brand $brandModel): void
    {
        $this->brandModel = $brandModel;
        
        $this->name = $this->brandModel->name;
        $this->slug = $this->brandModel->slug;
    }

    public function store(): void
    {
        $this->brandModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->brandModel->update($this->validate());

        $this->reset();
    }
}
