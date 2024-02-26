<a href="/table/{{ $table->id }}" wire:navigate>
    <div class="card-of-table bg-accent-second min-w-100 min-h-100">
        <div class="row">
            <div class="col-12">
                Стол: {{ $table->name }}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                Описание: {{ $table->description }}
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Создан: {{ $table->created_at }}
            </div>
            <div class="col-6">
                Обновлен: {{ $table->updated_at }}
            </div>
        </div>
    </div>

</a>
