<?php

namespace App\Livewire\User\Tables\Components;

use App\Models\Table;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CardOfTable extends Component
{
    public Table $table;

    public function mount($table)
    {
        $this->table = $table;
    }

    public function render()
    {
        return view('livewire.user.tables.components.card-of-table');
    }
}
