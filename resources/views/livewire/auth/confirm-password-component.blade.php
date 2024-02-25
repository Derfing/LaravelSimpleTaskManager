<div>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form wire:submit="confirmPassword">
        <!-- Password -->
        <div>
            <label for="password">Пароль</label>

            <input wire:model="password" id="password" type="password" name="password" required
                autocomplete="current-password" />
        </div>

        <div class="flex justify-end mt-4">
            <button type="submit">Подтвердить</button>
        </div>
    </form>
</div>
