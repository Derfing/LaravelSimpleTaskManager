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
                    <!-- Button trigger modal -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Забыли пароль?
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content modal_forget">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Восстановлениение пароля</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Забыли пароль? Не беда. Просто сообщите нам свой адрес электронной почты, и мы пришлем вам ссылку для сброса пароля, по которой вы сможете выбрать новый.</p>
                                    <form wire:submit="sendPasswordResetLink">
                                        <div class="inputbox modal_input">
                                            <input wire:model="email" id="email" type="text" name="email" required autofocus />
                                            <label for="email">Адрес электронной почты</label>
                                        </div>
                                        <button class="button-log-reg" type="submit">Отправить сслыку на востановление</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="button-log-reg" wire:click="login" type="submit">Войти</button>
                <div class="register">
                    <p>У тебя нету аккаунта? <a href="/register" wire:navigate>Регистрация</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
