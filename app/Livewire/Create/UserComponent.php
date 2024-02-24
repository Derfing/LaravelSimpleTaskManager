<?php

namespace App\Livewire\Create;

use App\Models\Role;
use App\Models\User;
use Hash;
use Livewire\Component;

class UserComponent extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public int $role = 0;

    public function save()
    {
        $user = new User;

        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->role_id = $this->role;

        $user->save();

        return redirect()->to('/');
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.create.user-component', ['roles' => $roles]);
    }
}
