<?php

namespace App\Livewire\Read;

use App\Models\Role;
use App\Models\User;
use Exception;
use Livewire\Component;

class UserComponent extends Component
{
    public string $name;
    public string $email;
    public string $role;

    private function getUser($userId)
    {
        $user = User::find($userId);
        if (!$user) {
            return redirect('/');
        }
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = Role::find($user->role_id)->name;
    }

    public function mount($userId)
    {
        $this->getUser($userId);
    }

    public function render()
    {
        return view('livewire.read.user-component');
    }
}
