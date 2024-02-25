<div class="container-fluid">
    <form wire:submit='login'>
        <div class="row">
            <div class="offset-2 col-8">
                <label for="email" class="form-label">Адрес электронной почты</label>
                <input type="email" wire:model='form.email' class="form-control" id="email"
                    placeholder="name@example.com">
            </div>
            <div class="offset-2 col-8">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" wire:model='form.password' class="form-control" id="password"
                    placeholder="********">
            </div>
            <div class="block mt-4">
                <label for="remember" class="inline-flex items-center">
                    <input wire:model="form.remember" id="remember" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}" wire:navigate>
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <button type="submit">Войти</button>
            </div>
        </div>
    </form>
</div>
