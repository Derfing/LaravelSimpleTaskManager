<?php

namespace App\Livewire\Table;

use App\Models\Table as ModelsTable;
use Livewire\Component;

class Table extends Component
{
    public $table;

    public function mount($tableId)
    {
        $this->table = ModelsTable::find($tableId);
    }

    public function render()
    {
        return view('livewire.table.table');
    }
}
