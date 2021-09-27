<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $openAdvancedFilters = false;
    public $perPage = 10;
    public $sorts = [];
    public $filters = ["search" => null];

    protected $listeners = ['eventUpdated' => '$refresh'];
    
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
        $query = Event::query()
            ->when($this->filters['search'], fn($query, $search) => $query->where("title", "like", "%$search%"));
        
        return $this->applySorting($query);
    }

    function paginationView()
    {
        return 'components.custom.pagination';
    }

    public function render()
    {
        return view('livewire.event.index', [
            "items" => $this->runQueryBuilder()->paginate($this->perPage),
            "sorts" => $this->sorts,
            'title' => 'Eventos',
            'sub_title' => 'Lista',
            'svg' => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z'
        ])->layout('layouts.app', [
            'title' => 'Eventos'
        ]);
    }
}
