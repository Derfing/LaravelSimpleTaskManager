<div>
    @foreach ($tasks as $task)
        <livewire:table.tasks.task-card :task="$task" />
    @endforeach
</div>
