<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Edit extends Component
{
    public User $user;
    public $open = false;
    public $type = 'edit';

    protected $listeners = ['open' => 'showItem'];

    public function mount()
    {
        //
    }

    protected function rules()
    {
        return [
            'user.name' => 'required|string|min:3|max:191',
            'user.email' => 'required|string|email|max:191|unique:users,email,' . $this->user->id,
            'user.password' => 'string|min:8|max:191'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->user = User::find($id);
        $this->user->password = '';
        $this->open = true;
    }

    public function save()
    {
        $this->validate();
        if(strlen($this->user->password) > 5){
            $this->user->password = Hash::make($this->user->password);
        }else{
            unset($this->user->password);
        }
        $this->user->update($this->user->toArray());
        $this->emitUp('userUpdated'); //atualiza user.index
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.user.edit');
    }
}
