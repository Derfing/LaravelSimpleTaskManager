<div class="table-wrap">
    <div class="row">
        <div class="offset-2 col-8">
            Название стола: {{ $table->name }}
        </div>
    </div>
    <div class="row">
        <div class="offset-2 col-8">
            Описание стола: {{ $table->description }}
        </div>
    </div>
    <div class="row">
        <div class="offset-2 col-8">
            Создан: {{ $table->created_at }}
        </div>
    </div>
    <div class="row">
        <div class="offset-2 col-8">
            Обновлен: {{ $table->updated_at }}
        </div>
    </div>
    <div class="row">
        <a class="offset-2 col-8 btn btn-lg btn-primary" href="/table/{{ $table->id }}/tasks" wire:navigate>
            Список задач
        </a>
    </div>
</div>
