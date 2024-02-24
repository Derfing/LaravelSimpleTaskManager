<?php

namespace App\Livewire\Read;

use App\Models\Task;
use Livewire\Component;

class TaskComponent extends Component
{
    public string $name;
    public string $description;
    public string $body;
    public bool $completed;
    public $deadline;
    public $createdAt;
    public $updatedAt;


    private function getTask(int $taskId)
    {
        $task = Task::find($taskId);
        if (!$task) {
            return redirect('/');
        }
        $this->name = $task->name;
        $this->description = $task->description;
        $this->body = $task->body;
        $this->completed = $task->completed;
        $this->deadline = $task->deadline;
        $this->createdAt = $task->created_at;
        $this->updatedAt = $task->updated_at;
    }

    public function mount($taskId)
    {
        $this->getTask($taskId);
    }

    public function render()
    {
        return view('livewire.read.task-component');
    }
}
