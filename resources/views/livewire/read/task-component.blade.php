<div>
    <div class="row">
        <div class="col-12 text-left">
            Задача: {{ $name }}
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-left">
            Описание: {{ $description }}
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-left">
            Тело: {{ $body }}
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-left">
            Состояние: {{ $completed ? 'Выполнено' : 'В работе' }}
        </div>
    </div>
    <div class="row">
        <div class="col-4 text-left">
            Дедлайн: {{ $deadline }}
        </div>
        <div class="col-4 text-left">
            Задача создана: {{ $createdAt }}
        </div>
        <div class="col-4 text-left">
            Последнее обновление: {{ $updatedAt }}
        </div>
    </div>
</div>
