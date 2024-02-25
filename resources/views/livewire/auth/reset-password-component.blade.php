<div>
    <form wire:submit="resetPassword">
        <!-- Email Address -->
        <div>
            <label for="email">Электронная почта</label>
            <input wire:model="email" id="email" type="email" name="email" required autofocus
                autocomplete="username" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Пароль</label>
            <input wire:model="password" id="password" type="password" name="password" required
                autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation">Подтвердите пароль</label>

            <input wire:model="password_confirmation" id="password_confirmation" type="password"
                name="password_confirmation" required autocomplete="new-password" />
        </div>

        <button type="submit">Сохранить</button>
    </form>
</div>
