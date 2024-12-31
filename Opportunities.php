<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Item;

class Opportunities extends Component
{
    use WithPagination;

    public $perPage = 20;
    public $options = [20, 50, 100, 250];

    protected $queryString = ['perPage'];

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function render()
    {
        $items = Item::paginate($this->perPage);

        return view('livewire.opportunities', [
            'items' => $items
        ]);
    }
}
