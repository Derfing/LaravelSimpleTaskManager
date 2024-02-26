<div>
    {{ $task->name }}
    {{ $task->description }}
    {{ $task->takenBy }}
    {{ $task->difficulty }}
    {{ $task->completed }}
    {{ $task->tag }}
    {{ $task->deadline }}
    <a href="/table/{{ $task->table->id }}/task/{{ $task->id }}" wire:navigate>Перейти к задаче</a>
</div>
