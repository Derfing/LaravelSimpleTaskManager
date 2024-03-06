<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('head')

    <title>
        @yield('title')
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    @yield('styles')
    @livewireStyles
</head>

<body>
    <header class="header">
        <a class="header_logo" wire:navigate href="{{ route('home') }}">TaskManager</a>
        <nav>
            <a class="header_navbar" wire:navigate href="#">Главная</a>
            <a class="header_navbar" wire:navigate href="/user/{{ auth()->id() }}/tasks">Задачи</a>
            <a class="header_navbar" wire:navigate href="/user/{{ auth()->id() }}/tables">Столы</a>
            @auth
            <a class="login_reg_btn" wire:navigate href="/user/{{ auth()->id() }}/profile">Профиль</a>
            @endauth
            @guest
            <a class="login_reg_btn" wire:navigate href="{{ route('login') }}">Войти</a>
            <a class="login_reg_btn" wire:navigate href="{{ route('register') }}">Регистрация</a>
            @endguest
        </nav>
    </header>
    @yield('body')
    <footer class="footer text-white pb-4 text-center">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-6 text-left">
                    <p class="mb-0">Добро пожаловать в Простой Менеджер Задач!</p>
                    <p class="mb-0">Этот проект разработан мной, известным как Derfing, как мой личный пет-проект для
                        управления задачами и проектами.</p>
                </div>
                <div class="col-6 text-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="https://github.com/Derfing/LaravelSimpleTaskManager" target="_blank"
                                class="text-white">GitHub проекта</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="#" wire:navigate class="text-white">Политика конфиденциальности</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" wire:navigate class="text-white">Условия использования</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
