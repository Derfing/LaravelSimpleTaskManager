<?php

namespace App\Livewire\Table\Tasks;

use Livewire\Component;

class TaskCard extends Component
{
    public $task;

    public function mount($task)
    {
        $this->task = $task;
    }

    public function render()
    {
        return view('livewire.table.tasks.task-card');
    }
}
