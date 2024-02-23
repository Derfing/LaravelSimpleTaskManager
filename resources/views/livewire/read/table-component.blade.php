<div>
    <div class="row">
        <div class="col-12 text-left">
            Имя стола: {{ $name }}
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-left">
            Владелец: {{ $owner }}
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-left">
            Пользователи: <ul>
                @foreach ($users as $user)
                    <li>{{ $user }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-left">
            Задачи: <ul>
                @foreach ($tasks as $task)
                    <li>{{ $task }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
