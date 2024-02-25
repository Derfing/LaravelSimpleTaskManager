<div>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    {{ session('status') }} <form wire:submit="sendPasswordResetLink">
        <!-- Email Address -->
        <div>
            <label for="email">Адрес электронной почты</label>
            <input wire:model="email" id="email" type="email" name="email" required autofocus />
        </div>

        <button type="submit">Отправить сслыку на востановление</button>
    </form>
</div>
