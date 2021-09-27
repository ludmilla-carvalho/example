<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;

class Delete extends Component
{
    public User $user;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->user = new User();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->user = User::find($id);
    }

    public function delete(){
        $this->user->delete();
        $this->emitUp('userUpdated'); //atualiza user.edit
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.user.delete');
    }
}
