<?php

namespace App\Livewire;

use App\Models\flavor;
use Livewire\Component;

class FlavorCard extends Component
{
    public flavor $flavor;
    public bool $isModalOpen = false;

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function delete()
    {
        $this->closeModal();
        flavor::destroy($this->flavor->id);
        session()->flash('toast', 'Sabor deletado com sucesso');
        $this->redirect('/cardapio', navigate: true);
    }
    public function render()
    {
        return view('livewire.flavor-card');
    }
}
