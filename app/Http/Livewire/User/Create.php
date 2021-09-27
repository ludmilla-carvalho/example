<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public User $user;
    public $open = false;
    public $type = 'add';

    protected $listeners = ['open' => 'addItem'];


    protected $rules = [
        'user.name' => 'required|string|min:3|max:191',
        'user.email' => 'required|string|email|max:191|unique:users,email',
        'user.password' => 'required|string|min:8|max:191',
    ];

    public function mount()
    {
        $this->user = new User();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->user = new User();
        $this->open = true;
    }

    public function save()
    {
        $this->validate();
        $this->user->password = Hash::make($this->user->password);
        User::create($this->user->toArray());
        $this->emitUp('userUpdated'); //atualiza user.index
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.user.create');
    }
}
