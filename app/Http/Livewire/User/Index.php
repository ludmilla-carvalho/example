<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $openAdvancedFilters = false;
    public $perPage = 10;
    public $sorts = [];
    public $filters = ["search" => null];
    public $showFlash = false;
    public $confirmDeletion = false;
    public $del_id = null;
    public $del_name = null;

    protected $listeners = ['userUpdated' => '$refresh'];
    
    public function mount()
    {
        $this->perPage = session()->get('perPage', 10);
    }

    public function clearFilters()
    {
        $this->reset('filters');
    }

    public function sortBy($column)
    {
        $old_sorts = $this->sorts;

        $this->sorts = array();

        if (!isset($old_sorts[$column])) {
            return $this->sorts[$column] = 'asc';
        }

        if ($old_sorts[$column] === 'asc') {
            return $this->sorts[$column] = 'desc';
        }
    }

    public function applySorting($query)
    {
        foreach ($this->sorts as $column => $direction) {
            $query->orderBy($column, $direction);
        }
        return $query;
    }

    // hook lifecicle
    public function updatedFilters()
    {
        $this->resetPage();
    }

    // hook lifecicle
    public function updatedPerPage($value)
    {
        $this->resetPage();
        session()->put('perPage', $value);
    }

    public function runQueryBuilder()
    {
        $query = User::query()
            ->when($this->filters['search'], fn($query, $search) => $query->where("name", "like", "%$search%")->orWhere('email', 'like', "%$search%"));
        
        return $this->applySorting($query);
    }

    public function deleteUser($id, $name) {
        $this->confirmDeletion = false;
        User::whereId($id)->first()->delete();
        session()->flash('message', ['del', 'O administrador <strong>' . $name . '</strong> foi removido.']);
        $this->showFlash = true;
    }

    public function confirmUserDeletion($id, $name)
    {
        $this->confirmDeletion = true;
        $this->del_id = $id;
        $this->del_name = $name;
    }

    function paginationView()
    {
        return 'components.custom.pagination';
    }

    public function render()
    {
        return view('livewire.user.index', [
            "items" => $this->runQueryBuilder()->paginate($this->perPage),
            "sorts" => $this->sorts,
            "del_id" => $this->del_id,
            "del_name" => $this->del_name,
            'title' => 'Administradores',
            'sub_title' => 'Lista',
            'svg' => 'M4 6h16M4 10h16M4 14h16M4 18h16'
        ])->layout('layouts.app', [
            'title' => 'Administradores'
        ]);
    }
}
