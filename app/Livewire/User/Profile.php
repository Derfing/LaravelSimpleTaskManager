<?php

namespace App\Livewire\User;

use App\Livewire\Actions\Logout;
use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public User $user;

    public function logout()
    {
        $logout = new Logout();
        $logout();
    }

    public function mount($userId)
    {
        $this->user = User::find($userId);
    }

    public function render()
    {
        return view('livewire.user.profile');
    }
}
