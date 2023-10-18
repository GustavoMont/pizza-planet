<?php

namespace App\Livewire;

use App\Models\flavor;
use Livewire\Component;

class Menu extends Component
{
    public $flavors = [];
    public $search = "";

    public $name = "";
    public $ingredients = "";
    public $value = 45.00;
    public $preparation_time = 40;


    public function onSearch()
    {
        if (empty($this->search)) {
            $this->flavors = flavor::all();
        } else {
            $pesquisa = $this->search;
            $this->flavors = flavor::where("name", "like", "%$pesquisa%")->orWhere("ingredients", "like", "%$pesquisa%")->orWhere("value", "like", "%$pesquisa%")->get();
        }
    }

    public function resetForm()
    {
        $this->name = "";
        $this->ingredients = "";
        $this->value = 45.00;
        $this->preparation_time = 40;
    }

    public function save()
    {
        $flavor = new flavor();
        $flavor->name = $this->name;
        $flavor->ingredients = $this->ingredients;
        $flavor->value = $this->value;
        $flavor->preparation_time = $this->preparation_time;
        $flavor->save();

        $this->resetForm();

        session()->flash('toast', 'Sabor adicionado com sucesso');

        return $this->redirect('/cardapio', navigate: true);

    }

    public function render()
    {
        $this->onSearch();
        return view('livewire.menu');
    }
}