<?php

namespace App\Livewire\Create;

use App\Models\Table;
use Auth;
use Livewire\Component;

class TableComponent extends Component
{
    public string $name;

    public function save()
    {
        $table = new Table();

        $table->name = $this->name;
        $table->owner_id = Auth()->id();

        $table->save();
    }

    public function render()
    {
        return view('livewire.create.table-component');
    }
}
