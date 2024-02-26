<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Tables extends Component
{
    public $tables;

    public function mount($userId)
    {
        $this->tables = User::find($userId)->tables;
    }

    public function render()
    {
        return view('livewire.user.tables');
    }
}
