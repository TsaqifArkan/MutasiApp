<?php

namespace App\Livewire;

use App\Models\RecapSkmut;
use Livewire\Component;
use Livewire\WithPagination;

class SkmutTable extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'ttg_sk';
    public $sortDirection = 'asc';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $skmuts = RecapSkmut::where('ttg_sk', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate();
        return view('livewire.skmut-table', [
            'skmuts' => $skmuts,
        ]);
    }
}
