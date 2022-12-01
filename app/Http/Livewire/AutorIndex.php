<?php

namespace App\Http\Livewire;

use App\Models\Autor;
use Livewire\Component;
use Livewire\WithPagination;

class AutorIndex extends Component
{
    use WithPagination;
    public $search = '';
    protected $paginationTheme = "bootstrap";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $autores = Autor::where('nombre', 'LIKE', '%'. $this->search)->latest('id')->paginate(10);
        return view('livewire.autor-index',compact('autores'));
    }
}
