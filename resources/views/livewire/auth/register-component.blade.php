<div>
    <form wire:submit="register">
        <!-- Name -->
        <div>
            <label for="name">Имя пользователя</label>
            <input type="text" wire:model='name' id="name">
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email">Адрес электронной почты</label>
            <input type="email" wire:model='email' id="email">
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Пароль</label>
            <input type="password" wire:model='password' id="password">
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation">Повторите пароль</label>
            <input type="password" wire:model='password_confirmation' id="password_confirmation">
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>
            <button type="submit">Зарегестрироваться</button>
        </div>
    </form>
</div>
