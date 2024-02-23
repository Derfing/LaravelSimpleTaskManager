<?php

namespace App\Livewire\Read;

use App\Models\Table;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class TableComponent extends Component
{
    public string $name;
    public string $owner;
    public $users;
    public $tasks;

    private function getTable($tableId)
    {
        $table = Table::find($tableId);

        $this->name = $table->name;
        $this->owner = User::find($table->owner_id)->name;
        $this->users = $table->users->pluck('name');
        $this->tasks = $table->tasks->pluck('name');
    }
    public function mount($tableId)
    {
        $this->getTable($tableId);
    }

    public function render()
    {
        return view('livewire.read.table-component');
    }
}
