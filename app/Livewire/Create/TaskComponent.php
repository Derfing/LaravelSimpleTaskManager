<?php

namespace App\Livewire\Create;

use Livewire\Component;

class TaskComponent extends Component
{
    public string $name

    public function save()
    {
    }

    public function render()
    {
        return view('livewire.create.task-component');
    }
}
