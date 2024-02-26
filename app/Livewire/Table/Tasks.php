<?php

namespace App\Livewire\Table;

use App\Models\Table;
use Livewire\Component;

class Tasks extends Component
{
    public $tasks;

    public function mount($tableId)
    {
        $table = Table::find($tableId);
        $this->tasks = $table->tasks;
    }

    public function render()
    {
        return view('livewire.table.tasks');
    }
}
