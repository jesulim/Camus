<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Card;
use Livewire\WithPagination;

class CardsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $cards = Card::where('user_id', auth()->user()->id)
                        ->where('name','LIKE', '%' . $this->search . '%')
                        ->latest('id')
                        ->paginate();

        return view('livewire.admin.cards-index', compact('cards'));
    }
}
