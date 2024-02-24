@extends('templates.baseTemplate')

@section('title', 'home')

@section('body')
    <div class="text-center bg-accent-first p-3" id="upper-card">
        <h1 class="display-4">Добро пожаловать в TaskManager!</h1>
        <p class="lead">Управляйте своими задачами эффективно</p>
        <hr class="my-4">
        <p>TaskManager поможет вам организовать свои задачи, установить приоритеты и добиться большей продуктивности.</p>
        <a class="btn btn-success btn-lg home-card-wrap" href="#" role="button">Начать работу</a>
    </div>

    <div class="container-fluid p-3">
        <h2>Зачем использовать TaskManager?</h2>
        <div class="row">
            <div class="offset-1 col-5 pr-3">
                <div class="bg-accent-second home-card-wrap p-1">
                    <h2>Простой в использовании</h2>
                    <p>TaskManager предлагает интуитивно понятный интерфейс, который делает управление задачами простым и
                        эффективным.</p>
                </div>
            </div>
            <div class="col-5 pl-3">
                <div class="bg-accent-second home-card-wrap p-1">
                    <h2>Гибкость и настройка</h2>
                    <p>Настройте TaskManager в соответствии с вашими нуждами, установив собственные категории, теги и
                        приоритеты
                        для задач.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="offset-3 col-6 p-3">
                <div class="bg-accent-second home-card-wrap p-1">
                    <h2>Доступ к любому устройству</h2>
                    <p>TaskManager доступен на всех устройствах: компьютерах, планшетах и смартфонах, что позволяет вам
                        оставаться организованным в любое время и в любом месте.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-8 mx-auto text-center">
                <h2 class="mb-4">Что такое TaskManager?</h2>
                <p>TaskManager - это инструмент, который поможет вам управлять вашим временем и задачами более эффективно.
                    Вот несколько причин, почему стоит использовать TaskManager:</p>
                <ul class="list-unstyled text-left">
                    <li class="mb-3">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Организация задач: Создавайте списки задач и устанавливайте приоритеты для их
                            выполнения.</span>
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Удобство использования: Интуитивно понятный интерфейс делает работу с TaskManager простой и
                            приятной.</span>
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Доступность: TaskManager доступен на всех устройствах, поэтому вы можете использовать его в
                            любое время и в любом месте.</span>
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Гибкая настройка: Настройте TaskManager под свои нужды, добавляйте собственные категории и
                            теги для организации задач.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
