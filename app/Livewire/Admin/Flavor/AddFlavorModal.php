<?php

namespace App\Livewire\Admin\Flavor;

use App\Livewire\Forms\Admin\Form\FlavorForm;
use App\Models\flavor;
use Livewire\Component;

class AddFlavorModal extends Component
{
    public $isModalOpen = false;

    public FlavorForm $form;

    public function mount(flavor $flavor)
    {
        if (isset($flavor)) {
            $this->form->fillForm($flavor);
        }
    }

    public function resetForm()
    {
        $this->form->name = "";
        $this->form->value = 45;
        $this->form->preparation_time = 40;
        $this->form->ingredients = "";
    }


    public function openModal()
    {
        $this->isModalOpen = true;
    }
    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function save()
    {
        $this->validate();

        flavor::create(
            $this->form->all()
        );

        $this->resetForm();

        $this->closeModal();

        session()->flash('toast', 'Sabor adicionado com sucesso');

        return $this->redirect('/cardapio', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.flavor.add-flavor-modal');
    }
}
