<?php

namespace App\Livewire\Table;

use App\Models\Task as ModelsTask;
use Livewire\Component;

class Task extends Component
{
    public $task;

    public function mount($tableId, $taskId)
    {
        $this->task = ModelsTask::find($taskId);
        if ($this->task->table_id != $tableId) {
            return $this->redirect('/', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.table.task');
    }
}
