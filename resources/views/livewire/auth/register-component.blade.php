<section class="section-log-reg">
    <div class="form-box-reg">
        <form wire:submit="register">
            <h2 class="form-log-reg">Регистрация</h2>
            <!-- Name -->
            <div class="inputbox">
                <input type="text" wire:model='name' id="name" required>
                <label for="name">Имя пользователя</label>
            </div>

            <!-- Email Address -->
            <div class="inputbox">
                <input type="text" wire:model='email' id="email" required>
                <label for="email">Адрес электронной почты</label>
            </div>

            <!-- Password -->
            <div class="inputbox">
                <input type="password" wire:model='password' id="password" required>
                <label for="password">Пароль</label>
            </div>

            <!-- Confirm Password -->
            <div class="inputbox">
                <input type="password" wire:model='password_confirmation' id="password_confirmation" required>
                <label for="password_confirmation">Повторите пароль</label>
            </div>
            <button class="button-log-reg" type="submit">Зарегестрироваться</button>
            <div class="register">
                <a href="{{ route('login') }}" wire:navigate>{{ __('Already registered?') }}</a>
            </div>
        </form>
    </div>
    
</section>
