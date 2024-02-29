<section class="section-log-reg">
    <div class="form-box">
        <div class="form-value">
            <form wire:submit='login'>
                <h2 class="form-log-reg">Вход</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" wire:model='form.email' id="email" required>
                    <label for="email" >Адрес электронной почты</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" wire:model='form.password' id="password" required>
                    <label for="password" >Пароль</label>
                </div>
                <div class="forget">
                    <label for="remember">
                        <input wire:model="form.remember" id="remember" type="checkbox"
                        name="remember"> Запомнить меня
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" wire:navigate>Забыли пароль?</a>
                    @endif
                </div>
                <button class="button-log-reg" type="submit">Войти</button>
                <div class="register">
                    <p>У тебя нету аккаунта? <a href="/register" wire:navigate>Регистрация</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
