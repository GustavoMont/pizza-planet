<?php

namespace App\Livewire\Admin\Flavor;

use App\Livewire\Forms\Admin\Form\FlavorForm;
use App\Models\flavor;
use Livewire\Component;

class EditFlavor extends Component
{
    public flavor $flavor;
    public FlavorForm $form;

    public function mount(Flavor $flavor)
    {
        if (isset($flavor)) {
            $this->flavor = $flavor;
            $this->form->fillForm($this->flavor);
        }
    }

    public function save()
    {
        $this->validate();

        $this->flavor->update($this->form->all());

        session()->flash('toast', 'Sabor editado com sucesso');

        return $this->redirect('/cardapio', navigate: true);

    }

    public function render()
    {
        return view('livewire.admin.flavor.edit-flavor');
    }
}
