<div class="container-fluid">
    @section('title')
        Профиль пользователя {{ $user->name }}
    @endsection
    <div class="row px-2">
        <div class="row">
            <div class="col-12">
                <p>Имя пользователя: {{ $user->name }}</p>
            </div>
            <div class="col-12">
                <p>О себе: {{ $user->about }}</p>
            </div>
            <div class="col-12">
                <p>Роль: {{ $user->role_id }}</p>
            </div>
        </div>
    </div>
    @if ($user->id == auth()->id())
        <livewire:profile.update-profile-information-form />
        <livewire:profile.update-password-form />
        <livewire:profile.delete-user-form />
        <button wire:click='logout' type="button">Выйти из профиля</button>
    @endif
</div>
